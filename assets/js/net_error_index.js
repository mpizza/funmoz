(function() {
	window['MONAV']	= {};
	var ns = window['MONAV'];
	
	function $(id) {
		if (typeof id == 'string')
			return document.getElementById(id);
		else
			return id;
	};
	
	function $e(tagName) {
		return document.createElement(tagName);	
	}
	
	// extend object
	function _extend(src, target) {
		for (var key in src) {
			target[key] = src[key];
		}
		return target;
	}
	
	// bind method to context
	function _bind(func, context) {
		var __method = func, args = Array.prototype.slice.call(arguments, 2);
		return function() {
			return __method.apply(context, args);
		}
	};
	
	function _bindAsEventListener(func, context) {
		var __method = func, args = Array.prototype.slice.call(arguments, 2);
		return function(event) {
			var a = Array.prototype.concat([event || window.event], args);
			return __method.apply(context, a);
		}
	};
	
	/**
	 * Wrap function for event object.
	 * Also defined in index.ie.js
	 */
	var __event__ = window['__event__'] ? window['__event__'] : function (evt) {
		return evt;
	};
	ns.Util = {
		map: function(f, xs) {
			var ret = [];
			var len = xs.length;
			for (var i = 0; i < len; i++) {
				ret.push(f(xs[i]));
			}
			return ret;
		},
		
		get_height: function() {
			return document.body.scrollHeight;
		},
		  
		getRel: function(elem) {
			if (!!elem.getAttribute('rel'))
				return elem.getAttribute('rel');
			var rel = /rel-([^ ]+)/i.exec(elem.className);
			if (!!rel && rel.length == 2)
				return rel[1];
		}
		
	};
	
	ns.EventCenter = (function(){
		var cb = [];
		document.addEventListener('click', function(event) {
			for (var i = 0; i < cb.length; i++) {
				var target = event.target || event.srcElement;
				cb[i](event, target);
			}
		}, false);
		
		return {
			register_click_cb: function(callback) {
				if (typeof callback == 'function') {
					cb.push(callback);
				}
			}
		};
	})();
	
	ns.CSS = {
		is: function(node, cls) {
			var re = new RegExp('(^|\\s)' + cls + '(\\s|$)');
			if (re.test(node.className)) {
				return true;
			} else {
				return false;
			}
		},
		
		add: function(node, cls) {
			if (this.is(node, cls))
				return;
			var clss = node.className.split(' ');
			clss.push(cls);
			node.className = clss.join(' ');
		},
		
		del: function(node, cls) {
			var clss = node.className.split(' ');
			for (var i in clss) {
				if (clss[i] == cls) {
					clss.splice(i, 1);
					node.className = clss.join(' ');
					return;
				}
			}
		},
		
		find: function(cls, node) {
			if (!node) {
				node = document;
			}
			if (node.getElementsByClassName) {
				return node.getElementsByClassName(cls);
			} else if (node.querySelectorAll) {
				return node.querySelectorAll('.' + cls);
			} else if (document.getElementsByClassName) {
				return document.getElementsByClassName.call(node, cls);
			}
		}
	};
	
	
	ns.Tracer = {
		hooks: {},
		init: function() {
			var $this = this;
			document.addEventListener('click', function(evt) {
				var target = __event__(evt).target;
				if (target.tagName != 'A' && target.parentNode && target.parentNode.tagName == 'A') {
					target = target.parentNode;
				}
				$this.trace_link(evt, target);				
			}, false);
		},
		
		trace_link: function(evt, link) {
			if (!link.href || (link.href.indexOf('http://') != 0 && link.href.indexOf('https://') != 0))
				return;
			
			var category = this.identify(link);
			if (!category)
				return;
			
			var hook = this.hooks;
			if (this.hooks[category]) {
				var tracer = this.hooks[category];
				tracer(evt, link);
			} else {
				if (MOTRAC && MOTRAC.trace) {
					MOTRAC.trace({
						href: link.href,
						title: link.title,
						category: category	
					});
				}
			}
		},
		
		trace_link_item: function(href, title, category) {
			if (MOTRAC && MOTRAC.trace) {
				MOTRAC.trace({
					href: href,
					title: title,
					category: category	
				});
			}
		},
		
		identify: function(link) {
			while (link) {
				if (ns.CSS.is(link, 'no-link-trace')) {
					return null;
				}
				
				if (ns.CSS.is(link, 'link-trace')) {
					return ns.Util.getRel(link);
				}
				
				link = link.parentNode;
			}
			
			return null;
		}
	};
})();