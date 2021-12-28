!function(a,b){"use strict";"function"==typeof define&&define.amd?define("jquery-bridget/jquery-bridget",["jquery"],function(c){b(a,c)}):"object"==typeof module&&module.exports?module.exports=b(a,require("jquery")):a.jQueryBridget=b(a,a.jQuery)}(window,function(a,b){"use strict";function c(c,f,h){function i(a,b,d){var e,f="$()."+c+'("'+b+'")';return a.each(function(a,i){var j=h.data(i,c);if(!j)return void g(c+" not initialized. Cannot call methods, i.e. "+f);var k=j[b];if(!k||"_"==b.charAt(0))return void g(f+" is not a valid method");var l=k.apply(j,d);e=void 0===e?l:e}),void 0!==e?e:a}function j(a,b){a.each(function(a,d){var e=h.data(d,c);e?(e.option(b),e._init()):(e=new f(d,b),h.data(d,c,e))})}(h=h||b||a.jQuery)&&(f.prototype.option||(f.prototype.option=function(a){h.isPlainObject(a)&&(this.options=h.extend(!0,this.options,a))}),h.fn[c]=function(a){if("string"==typeof a){return i(this,a,e.call(arguments,1))}return j(this,a),this},d(h))}function d(a){!a||a&&a.bridget||(a.bridget=c)}var e=Array.prototype.slice,f=a.console,g=void 0===f?function(){}:function(a){f.error(a)};return d(b||a.jQuery),c}),function(a,b){"use strict";"function"==typeof define&&define.amd?define("get-size/get-size",[],function(){return b()}):"object"==typeof module&&module.exports?module.exports=b():a.getSize=b()}(window,function(){"use strict";function a(a){var b=parseFloat(a);return-1==a.indexOf("%")&&!isNaN(b)&&b}function b(){}function c(){for(var a={width:0,height:0,innerWidth:0,innerHeight:0,outerWidth:0,outerHeight:0},b=0;b<j;b++){a[i[b]]=0}return a}function d(a){var b=getComputedStyle(a);return b||h("Style returned "+b+". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"),b}function e(){if(!k){k=!0;var b=document.createElement("div");b.style.width="200px",b.style.padding="1px 2px 3px 4px",b.style.borderStyle="solid",b.style.borderWidth="1px 2px 3px 4px",b.style.boxSizing="border-box";var c=document.body||document.documentElement;c.appendChild(b);var e=d(b);f.isBoxSizeOuter=g=200==a(e.width),c.removeChild(b)}}function f(b){if(e(),"string"==typeof b&&(b=document.querySelector(b)),b&&"object"==typeof b&&b.nodeType){var f=d(b);if("none"==f.display)return c();var h={};h.width=b.offsetWidth,h.height=b.offsetHeight;for(var k=h.isBorderBox="border-box"==f.boxSizing,l=0;l<j;l++){var m=i[l],n=f[m],o=parseFloat(n);h[m]=isNaN(o)?0:o}var p=h.paddingLeft+h.paddingRight,q=h.paddingTop+h.paddingBottom,r=h.marginLeft+h.marginRight,s=h.marginTop+h.marginBottom,t=h.borderLeftWidth+h.borderRightWidth,u=h.borderTopWidth+h.borderBottomWidth,v=k&&g,w=a(f.width);!1!==w&&(h.width=w+(v?0:p+t));var x=a(f.height);return!1!==x&&(h.height=x+(v?0:q+u)),h.innerWidth=h.width-(p+t),h.innerHeight=h.height-(q+u),h.outerWidth=h.width+r,h.outerHeight=h.height+s,h}}var g,h="undefined"==typeof console?b:function(a){console.error(a)},i=["paddingLeft","paddingRight","paddingTop","paddingBottom","marginLeft","marginRight","marginTop","marginBottom","borderLeftWidth","borderRightWidth","borderTopWidth","borderBottomWidth"],j=i.length,k=!1;return f}),function(a,b){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",b):"object"==typeof module&&module.exports?module.exports=b():a.EvEmitter=b()}(this,function(){function a(){}var b=a.prototype;return b.on=function(a,b){if(a&&b){var c=this._events=this._events||{},d=c[a]=c[a]||[];return-1==d.indexOf(b)&&d.push(b),this}},b.once=function(a,b){if(a&&b){this.on(a,b);var c=this._onceEvents=this._onceEvents||{};return(c[a]=c[a]||{})[b]=!0,this}},b.off=function(a,b){var c=this._events&&this._events[a];if(c&&c.length){var d=c.indexOf(b);return-1!=d&&c.splice(d,1),this}},b.emitEvent=function(a,b){var c=this._events&&this._events[a];if(c&&c.length){var d=0,e=c[d];b=b||[];for(var f=this._onceEvents&&this._onceEvents[a];e;){var g=f&&f[e];g&&(this.off(a,e),delete f[e]),e.apply(this,b),d+=g?0:1,e=c[d]}return this}},a}),function(a,b){"use strict";"function"==typeof define&&define.amd?define("desandro-matches-selector/matches-selector",b):"object"==typeof module&&module.exports?module.exports=b():a.matchesSelector=b()}(window,function(){"use strict";var a=function(){var a=Element.prototype;if(a.matches)return"matches";if(a.matchesSelector)return"matchesSelector";for(var b=["webkit","moz","ms","o"],c=0;c<b.length;c++){var d=b[c],e=d+"MatchesSelector";if(a[e])return e}}();return function(b,c){return b[a](c)}}),function(a,b){"function"==typeof define&&define.amd?define("fizzy-ui-utils/utils",["desandro-matches-selector/matches-selector"],function(c){return b(a,c)}):"object"==typeof module&&module.exports?module.exports=b(a,require("desandro-matches-selector")):a.fizzyUIUtils=b(a,a.matchesSelector)}(window,function(a,b){var c={};c.extend=function(a,b){for(var c in b)a[c]=b[c];return a},c.modulo=function(a,b){return(a%b+b)%b},c.makeArray=function(a){var b=[];if(Array.isArray(a))b=a;else if(a&&"number"==typeof a.length)for(var c=0;c<a.length;c++)b.push(a[c]);else b.push(a);return b},c.removeFrom=function(a,b){var c=a.indexOf(b);-1!=c&&a.splice(c,1)},c.getParent=function(a,c){for(;a!=document.body;)if(a=a.parentNode,b(a,c))return a},c.getQueryElement=function(a){return"string"==typeof a?document.querySelector(a):a},c.handleEvent=function(a){var b="on"+a.type;this[b]&&this[b](a)},c.filterFindElements=function(a,d){a=c.makeArray(a);var e=[];return a.forEach(function(a){if(a instanceof HTMLElement){if(!d)return void e.push(a);b(a,d)&&e.push(a);for(var c=a.querySelectorAll(d),f=0;f<c.length;f++)e.push(c[f])}}),e},c.debounceMethod=function(a,b,c){var d=a.prototype[b],e=b+"Timeout";a.prototype[b]=function(){var a=this[e];a&&clearTimeout(a);var b=arguments,f=this;this[e]=setTimeout(function(){d.apply(f,b),delete f[e]},c||100)}},c.docReady=function(a){"complete"==document.readyState?a():document.addEventListener("DOMContentLoaded",a)},c.toDashed=function(a){return a.replace(/(.)([A-Z])/g,function(a,b,c){return b+"-"+c}).toLowerCase()};var d=a.console;return c.htmlInit=function(b,e){c.docReady(function(){var f=c.toDashed(e),g="data-"+f,h=document.querySelectorAll("["+g+"]"),i=document.querySelectorAll(".js-"+f),j=c.makeArray(h).concat(c.makeArray(i)),k=g+"-options",l=a.jQuery;j.forEach(function(a){var c,f=a.getAttribute(g)||a.getAttribute(k);try{c=f&&JSON.parse(f)}catch(i){return void(d&&d.error("Error parsing "+g+" on "+a.className+": "+i))}var h=new b(a,c);l&&l.data(a,e,h)})})},c}),function(a,b){"function"==typeof define&&define.amd?define("outlayer/item",["ev-emitter/ev-emitter","get-size/get-size"],b):"object"==typeof module&&module.exports?module.exports=b(require("ev-emitter"),require("get-size")):(a.Outlayer={},a.Outlayer.Item=b(a.EvEmitter,a.getSize))}(window,function(a,b){"use strict";function c(a){for(var b in a)return!1;return null,!0}function d(a,b){a&&(this.element=a,this.layout=b,this.position={x:0,y:0},this._create())}function e(a){return a.replace(/([A-Z])/g,function(a){return"-"+a.toLowerCase()})}var f=document.documentElement.style,g="string"==typeof f.transition?"transition":"WebkitTransition",h="string"==typeof f.transform?"transform":"WebkitTransform",i={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[g],j={transform:h,transition:g,transitionDuration:g+"Duration",transitionProperty:g+"Property",transitionDelay:g+"Delay"},k=d.prototype=Object.create(a.prototype);k.constructor=d,k._create=function(){this._transn={ingProperties:{},clean:{},onEnd:{}},this.css({position:"absolute"})},k.handleEvent=function(a){var b="on"+a.type;this[b]&&this[b](a)},k.getSize=function(){this.size=b(this.element)},k.css=function(a){var b=this.element.style;for(var c in a){b[j[c]||c]=a[c]}},k.getPosition=function(){var a=getComputedStyle(this.element),b=this.layout._getOption("originLeft"),c=this.layout._getOption("originTop"),d=a[b?"left":"right"],e=a[c?"top":"bottom"],f=this.layout.size,g=-1!=d.indexOf("%")?parseFloat(d)/100*f.width:parseInt(d,10),h=-1!=e.indexOf("%")?parseFloat(e)/100*f.height:parseInt(e,10);g=isNaN(g)?0:g,h=isNaN(h)?0:h,g-=b?f.paddingLeft:f.paddingRight,h-=c?f.paddingTop:f.paddingBottom,this.position.x=g,this.position.y=h},k.layoutPosition=function(){var a=this.layout.size,b={},c=this.layout._getOption("originLeft"),d=this.layout._getOption("originTop"),e=c?"paddingLeft":"paddingRight",f=c?"left":"right",g=c?"right":"left",h=this.position.x+a[e];b[f]=this.getXValue(h),b[g]="";var i=d?"paddingTop":"paddingBottom",j=d?"top":"bottom",k=d?"bottom":"top",l=this.position.y+a[i];b[j]=this.getYValue(l),b[k]="",this.css(b),this.emitEvent("layout",[this])},k.getXValue=function(a){var b=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&!b?a/this.layout.size.width*100+"%":a+"px"},k.getYValue=function(a){var b=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&b?a/this.layout.size.height*100+"%":a+"px"},k._transitionTo=function(a,b){this.getPosition();var c=this.position.x,d=this.position.y,e=parseInt(a,10),f=parseInt(b,10),g=e===this.position.x&&f===this.position.y;if(this.setPosition(a,b),g&&!this.isTransitioning)return void this.layoutPosition();var h=a-c,i=b-d,j={};j.transform=this.getTranslate(h,i),this.transition({to:j,onTransitionEnd:{transform:this.layoutPosition},isCleaning:!0})},k.getTranslate=function(a,b){var c=this.layout._getOption("originLeft"),d=this.layout._getOption("originTop");return a=c?a:-a,b=d?b:-b,"translate3d("+a+"px, "+b+"px, 0)"},k.goTo=function(a,b){this.setPosition(a,b),this.layoutPosition()},k.moveTo=k._transitionTo,k.setPosition=function(a,b){this.position.x=parseInt(a,10),this.position.y=parseInt(b,10)},k._nonTransition=function(a){this.css(a.to),a.isCleaning&&this._removeStyles(a.to);for(var b in a.onTransitionEnd)a.onTransitionEnd[b].call(this)},k.transition=function(a){if(!parseFloat(this.layout.options.transitionDuration))return void this._nonTransition(a);var b=this._transn;for(var c in a.onTransitionEnd)b.onEnd[c]=a.onTransitionEnd[c];for(c in a.to)b.ingProperties[c]=!0,a.isCleaning&&(b.clean[c]=!0);if(a.from){this.css(a.from);this.element.offsetHeight;null}this.enableTransition(a.to),this.css(a.to),this.isTransitioning=!0};var l="opacity,"+e(h);k.enableTransition=function(){if(!this.isTransitioning){var a=this.layout.options.transitionDuration;a="number"==typeof a?a+"ms":a,this.css({transitionProperty:l,transitionDuration:a,transitionDelay:this.staggerDelay||0}),this.element.addEventListener(i,this,!1)}},k.onwebkitTransitionEnd=function(a){this.ontransitionend(a)},k.onotransitionend=function(a){this.ontransitionend(a)};var m={"-webkit-transform":"transform"};k.ontransitionend=function(a){if(a.target===this.element){var b=this._transn,d=m[a.propertyName]||a.propertyName;if(delete b.ingProperties[d],c(b.ingProperties)&&this.disableTransition(),d in b.clean&&(this.element.style[a.propertyName]="",delete b.clean[d]),d in b.onEnd){b.onEnd[d].call(this),delete b.onEnd[d]}this.emitEvent("transitionEnd",[this])}},k.disableTransition=function(){this.removeTransitionStyles(),this.element.removeEventListener(i,this,!1),this.isTransitioning=!1},k._removeStyles=function(a){var b={};for(var c in a)b[c]="";this.css(b)};var n={transitionProperty:"",transitionDuration:"",transitionDelay:""};return k.removeTransitionStyles=function(){this.css(n)},k.stagger=function(a){a=isNaN(a)?0:a,this.staggerDelay=a+"ms"},k.removeElem=function(){this.element.parentNode.removeChild(this.element),this.css({display:""}),this.emitEvent("remove",[this])},k.remove=function(){if(!g||!parseFloat(this.layout.options.transitionDuration))return void this.removeElem();this.once("transitionEnd",function(){this.removeElem()}),this.hide()},k.reveal=function(){delete this.isHidden,this.css({display:""});var a=this.layout.options,b={};b[this.getHideRevealTransitionEndProperty("visibleStyle")]=this.onRevealTransitionEnd,this.transition({from:a.hiddenStyle,to:a.visibleStyle,isCleaning:!0,onTransitionEnd:b})},k.onRevealTransitionEnd=function(){this.isHidden||this.emitEvent("reveal")},k.getHideRevealTransitionEndProperty=function(a){var b=this.layout.options[a];if(b.opacity)return"opacity";for(var c in b)return c},k.hide=function(){this.isHidden=!0,this.css({display:""});var a=this.layout.options,b={};b[this.getHideRevealTransitionEndProperty("hiddenStyle")]=this.onHideTransitionEnd,this.transition({from:a.visibleStyle,to:a.hiddenStyle,isCleaning:!0,onTransitionEnd:b})},k.onHideTransitionEnd=function(){this.isHidden&&(this.css({display:"none"}),this.emitEvent("hide"))},k.destroy=function(){this.css({position:"",left:"",right:"",top:"",bottom:"",transition:"",transform:""})},d}),function(a,b){"use strict";"function"==typeof define&&define.amd?define("outlayer/outlayer",["ev-emitter/ev-emitter","get-size/get-size","fizzy-ui-utils/utils","./item"],function(c,d,e,f){return b(a,c,d,e,f)}):"object"==typeof module&&module.exports?module.exports=b(a,require("ev-emitter"),require("get-size"),require("fizzy-ui-utils"),require("./item")):a.Outlayer=b(a,a.EvEmitter,a.getSize,a.fizzyUIUtils,a.Outlayer.Item)}(window,function(a,b,c,d,e){"use strict";function f(a,b){var c=d.getQueryElement(a);if(!c)return void(i&&i.error("Bad element for "+this.constructor.namespace+": "+(c||a)));this.element=c,j&&(this.$element=j(this.element)),this.options=d.extend({},this.constructor.defaults),this.option(b);var e=++l;this.element.outlayerGUID=e,m[e]=this,this._create(),this._getOption("initLayout")&&this.layout()}function g(a){function b(){a.apply(this,arguments)}return b.prototype=Object.create(a.prototype),b.prototype.constructor=b,b}function h(a){if("number"==typeof a)return a;var b=a.match(/(^\d*\.?\d*)(\w*)/),c=b&&b[1],d=b&&b[2];return c.length?(c=parseFloat(c))*(o[d]||1):0}var i=a.console,j=a.jQuery,k=function(){},l=0,m={};f.namespace="outlayer",f.Item=e,f.defaults={containerStyle:{position:"relative"},initLayout:!0,originLeft:!0,originTop:!0,resize:!0,resizeContainer:!0,transitionDuration:"0.4s",hiddenStyle:{opacity:0,transform:"scale(0.001)"},visibleStyle:{opacity:1,transform:"scale(1)"}};var n=f.prototype;d.extend(n,b.prototype),n.option=function(a){d.extend(this.options,a)},n._getOption=function(a){var b=this.constructor.compatOptions[a];return b&&void 0!==this.options[b]?this.options[b]:this.options[a]},f.compatOptions={initLayout:"isInitLayout",horizontal:"isHorizontal",layoutInstant:"isLayoutInstant",originLeft:"isOriginLeft",originTop:"isOriginTop",resize:"isResizeBound",resizeContainer:"isResizingContainer"},n._create=function(){this.reloadItems(),this.stamps=[],this.stamp(this.options.stamp),d.extend(this.element.style,this.options.containerStyle),this._getOption("resize")&&this.bindResize()},n.reloadItems=function(){this.items=this._itemize(this.element.children)},n._itemize=function(a){for(var b=this._filterFindItemElements(a),c=this.constructor.Item,d=[],e=0;e<b.length;e++){var f=b[e],g=new c(f,this);d.push(g)}return d},n._filterFindItemElements=function(a){return d.filterFindElements(a,this.options.itemSelector)},n.getItemElements=function(){return this.items.map(function(a){return a.element})},n.layout=function(){this._resetLayout(),this._manageStamps();var a=this._getOption("layoutInstant"),b=void 0!==a?a:!this._isLayoutInited;this.layoutItems(this.items,b),this._isLayoutInited=!0},n._init=n.layout,n._resetLayout=function(){this.getSize()},n.getSize=function(){this.size=c(this.element)},n._getMeasurement=function(a,b){var d,e=this.options[a];e?("string"==typeof e?d=this.element.querySelector(e):e instanceof HTMLElement&&(d=e),this[a]=d?c(d)[b]:e):this[a]=0},n.layoutItems=function(a,b){a=this._getItemsForLayout(a),this._layoutItems(a,b),this._postLayout()},n._getItemsForLayout=function(a){return a.filter(function(a){return!a.isIgnored})},n._layoutItems=function(a,b){if(this._emitCompleteOnItems("layout",a),a&&a.length){var c=[];a.forEach(function(a){var d=this._getItemLayoutPosition(a);d.item=a,d.isInstant=b||a.isLayoutInstant,c.push(d)},this),this._processLayoutQueue(c)}},n._getItemLayoutPosition=function(){return{x:0,y:0}},n._processLayoutQueue=function(a){this.updateStagger(),a.forEach(function(a,b){this._positionItem(a.item,a.x,a.y,a.isInstant,b)},this)},n.updateStagger=function(){var a=this.options.stagger;return null===a||void 0===a?void(this.stagger=0):(this.stagger=h(a),this.stagger)},n._positionItem=function(a,b,c,d,e){d?a.goTo(b,c):(a.stagger(e*this.stagger),a.moveTo(b,c))},n._postLayout=function(){this.resizeContainer()},n.resizeContainer=function(){if(this._getOption("resizeContainer")){var a=this._getContainerSize();a&&(this._setContainerMeasure(a.width,!0),this._setContainerMeasure(a.height,!1))}},n._getContainerSize=k,n._setContainerMeasure=function(a,b){if(void 0!==a){var c=this.size;c.isBorderBox&&(a+=b?c.paddingLeft+c.paddingRight+c.borderLeftWidth+c.borderRightWidth:c.paddingBottom+c.paddingTop+c.borderTopWidth+c.borderBottomWidth),a=Math.max(a,0),this.element.style[b?"width":"height"]=a+"px"}},n._emitCompleteOnItems=function(a,b){function c(){e.dispatchEvent(a+"Complete",null,[b])}function d(){++g==f&&c()}var e=this,f=b.length;if(!b||!f)return void c();var g=0;b.forEach(function(b){b.once(a,d)})},n.dispatchEvent=function(a,b,c){var d=b?[b].concat(c):c;if(this.emitEvent(a,d),j)if(this.$element=this.$element||j(this.element),b){var e=j.Event(b);e.type=a,this.$element.trigger(e,c)}else this.$element.trigger(a,c)},n.ignore=function(a){var b=this.getItem(a);b&&(b.isIgnored=!0)},n.unignore=function(a){var b=this.getItem(a);b&&delete b.isIgnored},n.stamp=function(a){(a=this._find(a))&&(this.stamps=this.stamps.concat(a),a.forEach(this.ignore,this))},n.unstamp=function(a){(a=this._find(a))&&a.forEach(function(a){d.removeFrom(this.stamps,a),this.unignore(a)},this)},n._find=function(a){if(a)return"string"==typeof a&&(a=this.element.querySelectorAll(a)),a=d.makeArray(a)},n._manageStamps=function(){this.stamps&&this.stamps.length&&(this._getBoundingRect(),this.stamps.forEach(this._manageStamp,this))},n._getBoundingRect=function(){var a=this.element.getBoundingClientRect(),b=this.size;this._boundingRect={left:a.left+b.paddingLeft+b.borderLeftWidth,top:a.top+b.paddingTop+b.borderTopWidth,right:a.right-(b.paddingRight+b.borderRightWidth),bottom:a.bottom-(b.paddingBottom+b.borderBottomWidth)}},n._manageStamp=k,n._getElementOffset=function(a){var b=a.getBoundingClientRect(),d=this._boundingRect,e=c(a);return{left:b.left-d.left-e.marginLeft,top:b.top-d.top-e.marginTop,right:d.right-b.right-e.marginRight,bottom:d.bottom-b.bottom-e.marginBottom}},n.handleEvent=d.handleEvent,n.bindResize=function(){a.addEventListener("resize",this),this.isResizeBound=!0},n.unbindResize=function(){a.removeEventListener("resize",this),this.isResizeBound=!1},n.onresize=function(){this.resize()},d.debounceMethod(f,"onresize",100),n.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&this.layout()},n.needsResizeLayout=function(){var a=c(this.element);return this.size&&a&&a.innerWidth!==this.size.innerWidth},n.addItems=function(a){var b=this._itemize(a);return b.length&&(this.items=this.items.concat(b)),b},n.appended=function(a){var b=this.addItems(a);b.length&&(this.layoutItems(b,!0),this.reveal(b))},n.prepended=function(a){var b=this._itemize(a);if(b.length){var c=this.items.slice(0);this.items=b.concat(c),this._resetLayout(),this._manageStamps(),this.layoutItems(b,!0),this.reveal(b),this.layoutItems(c)}},n.reveal=function(a){if(this._emitCompleteOnItems("reveal",a),a&&a.length){var b=this.updateStagger();a.forEach(function(a,c){a.stagger(c*b),a.reveal()})}},n.hide=function(a){if(this._emitCompleteOnItems("hide",a),a&&a.length){var b=this.updateStagger();a.forEach(function(a,c){a.stagger(c*b),a.hide()})}},n.revealItemElements=function(a){var b=this.getItems(a);this.reveal(b)},n.hideItemElements=function(a){var b=this.getItems(a);this.hide(b)},n.getItem=function(a){for(var b=0;b<this.items.length;b++){var c=this.items[b];if(c.element==a)return c}},n.getItems=function(a){a=d.makeArray(a);var b=[];return a.forEach(function(a){var c=this.getItem(a);c&&b.push(c)},this),b},n.remove=function(a){var b=this.getItems(a);this._emitCompleteOnItems("remove",b),b&&b.length&&b.forEach(function(a){a.remove(),d.removeFrom(this.items,a)},this)},n.destroy=function(){var a=this.element.style;a.height="",a.position="",a.width="",this.items.forEach(function(a){a.destroy()}),this.unbindResize();var b=this.element.outlayerGUID;delete m[b],delete this.element.outlayerGUID,j&&j.removeData(this.element,this.constructor.namespace)},f.data=function(a){a=d.getQueryElement(a);var b=a&&a.outlayerGUID;return b&&m[b]},f.create=function(a,b){var c=g(f);return c.defaults=d.extend({},f.defaults),d.extend(c.defaults,b),c.compatOptions=d.extend({},f.compatOptions),c.namespace=a,c.data=f.data,c.Item=g(e),d.htmlInit(c,a),j&&j.bridget&&j.bridget(a,c),c};var o={ms:1,s:1e3};return f.Item=e,f}),function(a,b){"function"==typeof define&&define.amd?define("packery/js/rect",b):"object"==typeof module&&module.exports?module.exports=b():(a.Packery=a.Packery||{},a.Packery.Rect=b())}(window,function(){"use strict";function a(b){for(var c in a.defaults)this[c]=a.defaults[c];for(c in b)this[c]=b[c]}a.defaults={x:0,y:0,width:0,height:0};var b=a.prototype;return b.contains=function(a){var b=a.width||0,c=a.height||0;return this.x<=a.x&&this.y<=a.y&&this.x+this.width>=a.x+b&&this.y+this.height>=a.y+c},b.overlaps=function(a){var b=this.x+this.width,c=this.y+this.height,d=a.x+a.width,e=a.y+a.height;return this.x<d&&b>a.x&&this.y<e&&c>a.y},b.getMaximalFreeRects=function(b){if(!this.overlaps(b))return!1;var c,d=[],e=this.x+this.width,f=this.y+this.height,g=b.x+b.width,h=b.y+b.height;return this.y<b.y&&(c=new a({x:this.x,y:this.y,width:this.width,height:b.y-this.y}),d.push(c)),e>g&&(c=new a({x:g,y:this.y,width:e-g,height:this.height}),d.push(c)),f>h&&(c=new a({x:this.x,y:h,width:this.width,height:f-h}),d.push(c)),this.x<b.x&&(c=new a({x:this.x,y:this.y,width:b.x-this.x,height:this.height}),d.push(c)),d},b.canFit=function(a){return this.width>=a.width&&this.height>=a.height},a}),function(a,b){if("function"==typeof define&&define.amd)define("packery/js/packer",["./rect"],b);else if("object"==typeof module&&module.exports)module.exports=b(require("./rect"));else{var c=a.Packery=a.Packery||{};c.Packer=b(c.Rect)}}(window,function(a){"use strict";function b(a,b,c){this.width=a||0,this.height=b||0,this.sortDirection=c||"downwardLeftToRight",this.reset()}var c=b.prototype;c.reset=function(){this.spaces=[];var b=new a({x:0,y:0,width:this.width,height:this.height});this.spaces.push(b),this.sorter=d[this.sortDirection]||d.downwardLeftToRight},c.pack=function(a){for(var b=0;b<this.spaces.length;b++){var c=this.spaces[b];if(c.canFit(a)){this.placeInSpace(a,c);break}}},c.columnPack=function(a){for(var b=0;b<this.spaces.length;b++){var c=this.spaces[b];if(c.x<=a.x&&c.x+c.width>=a.x+a.width&&c.height>=a.height-.01){a.y=c.y,this.placed(a);break}}},c.rowPack=function(a){for(var b=0;b<this.spaces.length;b++){var c=this.spaces[b];if(c.y<=a.y&&c.y+c.height>=a.y+a.height&&c.width>=a.width-.01){a.x=c.x,this.placed(a);break}}},c.placeInSpace=function(a,b){a.x=b.x,a.y=b.y,this.placed(a)},c.placed=function(a){for(var b=[],c=0;c<this.spaces.length;c++){var d=this.spaces[c],e=d.getMaximalFreeRects(a);e?b.push.apply(b,e):b.push(d)}this.spaces=b,this.mergeSortSpaces()},c.mergeSortSpaces=function(){b.mergeRects(this.spaces),this.spaces.sort(this.sorter)},c.addSpace=function(a){this.spaces.push(a),this.mergeSortSpaces()},b.mergeRects=function(a){var b=0,c=a[b];a:for(;c;){for(var d=0,e=a[b+d];e;){if(e==c)d++;else{if(e.contains(c)){a.splice(b,1),c=a[b];continue a}c.contains(e)?a.splice(b+d,1):d++}e=a[b+d]}b++,c=a[b]}return a};var d={downwardLeftToRight:function(a,b){return a.y-b.y||a.x-b.x},rightwardTopToBottom:function(a,b){return a.x-b.x||a.y-b.y}};return b}),function(a,b){"function"==typeof define&&define.amd?define("packery/js/item",["outlayer/outlayer","./rect"],b):"object"==typeof module&&module.exports?module.exports=b(require("outlayer"),require("./rect")):a.Packery.Item=b(a.Outlayer,a.Packery.Rect)}(window,function(a,b){"use strict";var c=document.documentElement.style,d="string"==typeof c.transform?"transform":"WebkitTransform",e=function(){a.Item.apply(this,arguments)},f=e.prototype=Object.create(a.Item.prototype),g=f._create;f._create=function(){g.call(this),this.rect=new b};var h=f.moveTo;return f.moveTo=function(a,b){var c=Math.abs(this.position.x-a),d=Math.abs(this.position.y-b);if(this.layout.dragItemCount&&!this.isPlacing&&!this.isTransitioning&&c<1&&d<1)return void this.goTo(a,b);h.apply(this,arguments)},f.enablePlacing=function(){this.removeTransitionStyles(),this.isTransitioning&&d&&(this.element.style[d]="none"),this.isTransitioning=!1,this.getSize(),this.layout._setRectSize(this.element,this.rect),this.isPlacing=!0},f.disablePlacing=function(){this.isPlacing=!1},f.removeElem=function(){this.element.parentNode.removeChild(this.element),this.layout.packer.addSpace(this.rect),this.emitEvent("remove",[this])},f.showDropPlaceholder=function(){var a=this.dropPlaceholder;a||(a=this.dropPlaceholder=document.createElement("div"),a.className="packery-drop-placeholder",a.style.position="absolute"),a.style.width=this.size.width+"px",a.style.height=this.size.height+"px",this.positionDropPlaceholder(),this.layout.element.appendChild(a)},f.positionDropPlaceholder=function(){this.dropPlaceholder.style[d]="translate("+this.rect.x+"px, "+this.rect.y+"px)"},f.hideDropPlaceholder=function(){var a=this.dropPlaceholder.parentNode;a&&a.removeChild(this.dropPlaceholder)},e}),function(a,b){"function"==typeof define&&define.amd?define(["get-size/get-size","outlayer/outlayer","packery/js/rect","packery/js/packer","packery/js/item"],b):"object"==typeof module&&module.exports?module.exports=b(require("get-size"),require("outlayer"),require("./rect"),require("./packer"),require("./item")):a.Packery=b(a.getSize,a.Outlayer,a.Packery.Rect,a.Packery.Packer,a.Packery.Item)}(window,function(a,b,c,d,e){"use strict";function f(a,b){return a.position.y-b.position.y||a.position.x-b.position.x}function g(a,b){return a.position.x-b.position.x||a.position.y-b.position.y}function h(a,b){var c=b.x-a.x,d=b.y-a.y;return Math.sqrt(c*c+d*d)}c.prototype.canFit=function(a){return this.width>=a.width-1&&this.height>=a.height-1};var i=b.create("packery");i.Item=e;var j=i.prototype;j._create=function(){b.prototype._create.call(this),this.packer=new d,this.shiftPacker=new d,this.isEnabled=!0,this.dragItemCount=0;var a=this;this.handleDraggabilly={dragStart:function(){a.itemDragStart(this.element)},dragMove:function(){a.itemDragMove(this.element,this.position.x,this.position.y)},dragEnd:function(){a.itemDragEnd(this.element)}},this.handleUIDraggable={start:function(b,c){c&&a.itemDragStart(b.currentTarget)},drag:function(b,c){c&&a.itemDragMove(b.currentTarget,c.position.left,c.position.top)},stop:function(b,c){c&&a.itemDragEnd(b.currentTarget)}}},j._resetLayout=function(){this.getSize(),this._getMeasurements();var a,b,c;this._getOption("horizontal")?(a=1/0,b=this.size.innerHeight+this.gutter,c="rightwardTopToBottom"):(a=this.size.innerWidth+this.gutter,b=1/0,c="downwardLeftToRight"),this.packer.width=this.shiftPacker.width=a,this.packer.height=this.shiftPacker.height=b,this.packer.sortDirection=this.shiftPacker.sortDirection=c,this.packer.reset(),this.maxY=0,this.maxX=0},j._getMeasurements=function(){this._getMeasurement("columnWidth","width"),this._getMeasurement("rowHeight","height"),this._getMeasurement("gutter","width")},j._getItemLayoutPosition=function(a){if(this._setRectSize(a.element,a.rect),this.isShifting||this.dragItemCount>0){var b=this._getPackMethod();this.packer[b](a.rect)}else this.packer.pack(a.rect);return this._setMaxXY(a.rect),a.rect},j.shiftLayout=function(){this.isShifting=!0,this.layout(),delete this.isShifting},j._getPackMethod=function(){return this._getOption("horizontal")?"rowPack":"columnPack"},j._setMaxXY=function(a){this.maxX=Math.max(a.x+a.width,this.maxX),this.maxY=Math.max(a.y+a.height,this.maxY)},j._setRectSize=function(b,c){var d=a(b),e=d.outerWidth,f=d.outerHeight;(e||f)&&(e=this._applyGridGutter(e,this.columnWidth),f=this._applyGridGutter(f,this.rowHeight)),c.width=Math.min(e,this.packer.width),c.height=Math.min(f,this.packer.height)},j._applyGridGutter=function(a,b){if(!b)return a+this.gutter;b+=this.gutter;var c=a%b,d=c&&c<1?"round":"ceil";return a=Math[d](a/b)*b},j._getContainerSize=function(){return this._getOption("horizontal")?{width:this.maxX-this.gutter}:{height:this.maxY-this.gutter}},j._manageStamp=function(a){var b,d=this.getItem(a);if(d&&d.isPlacing)b=d.rect;else{var e=this._getElementOffset(a);b=new c({x:this._getOption("originLeft")?e.left:e.right,y:this._getOption("originTop")?e.top:e.bottom})}this._setRectSize(a,b),this.packer.placed(b),this._setMaxXY(b)},j.sortItemsByPosition=function(){var a=this._getOption("horizontal")?g:f;this.items.sort(a)},j.fit=function(a,b,c){var d=this.getItem(a);d&&(this.stamp(d.element),d.enablePlacing(),this.updateShiftTargets(d),b=void 0===b?d.rect.x:b,c=void 0===c?d.rect.y:c,this.shift(d,b,c),this._bindFitEvents(d),d.moveTo(d.rect.x,d.rect.y),this.shiftLayout(),this.unstamp(d.element),this.sortItemsByPosition(),d.disablePlacing())},j._bindFitEvents=function(a){function b(){2==++d&&c.dispatchEvent("fitComplete",null,[a])}var c=this,d=0;a.once("layout",b),this.once("layoutComplete",b)},j.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&(this.options.shiftPercentResize?this.resizeShiftPercentLayout():this.layout())},j.needsResizeLayout=function(){var b=a(this.element),c=this._getOption("horizontal")?"innerHeight":"innerWidth";return b[c]!=this.size[c]},j.resizeShiftPercentLayout=function(){var b=this._getItemsForLayout(this.items),c=this._getOption("horizontal"),d=c?"y":"x",e=c?"height":"width",f=c?"rowHeight":"columnWidth",g=c?"innerHeight":"innerWidth",h=this[f];if(h=h&&h+this.gutter){this._getMeasurements();var i=this[f]+this.gutter;b.forEach(function(a){var b=Math.round(a.rect[d]/h);a.rect[d]=b*i})}else{var j=a(this.element)[g]+this.gutter,k=this.packer[e];b.forEach(function(a){a.rect[d]=a.rect[d]/k*j})}this.shiftLayout()},j.itemDragStart=function(a){if(this.isEnabled){this.stamp(a);var b=this.getItem(a);b&&(b.enablePlacing(),b.showDropPlaceholder(),this.dragItemCount++,this.updateShiftTargets(b))}},j.updateShiftTargets=function(a){this.shiftPacker.reset(),this._getBoundingRect();var b=this._getOption("originLeft"),d=this._getOption("originTop");this.stamps.forEach(function(a){var e=this.getItem(a);if(!e||!e.isPlacing){var f=this._getElementOffset(a),g=new c({x:b?f.left:f.right,y:d?f.top:f.bottom});this._setRectSize(a,g),this.shiftPacker.placed(g)}},this);var e=this._getOption("horizontal"),f=e?"rowHeight":"columnWidth",g=e?"height":"width";this.shiftTargetKeys=[],this.shiftTargets=[];var h,i=this[f];if(i=i&&i+this.gutter){var j=Math.ceil(a.rect[g]/i),k=Math.floor((this.shiftPacker[g]+this.gutter)/i);h=(k-j)*i;for(var l=0;l<k;l++){var m=e?0:l*i,n=e?l*i:0;this._addShiftTarget(m,n,h)}}else h=this.shiftPacker[g]+this.gutter-a.rect[g],this._addShiftTarget(0,0,h);var o=this._getItemsForLayout(this.items),p=this._getPackMethod();o.forEach(function(a){var b=a.rect;this._setRectSize(a.element,b),this.shiftPacker[p](b),this._addShiftTarget(b.x,b.y,h);var c=e?b.x+b.width:b.x,d=e?b.y:b.y+b.height;if(this._addShiftTarget(c,d,h),i)for(var f=Math.round(b[g]/i),j=1;j<f;j++){var k=e?c:b.x+i*j,l=e?b.y+i*j:d;this._addShiftTarget(k,l,h)}},this)},j._addShiftTarget=function(a,b,c){var d=this._getOption("horizontal")?b:a;if(!(0!==d&&d>c)){var e=a+","+b;-1!=this.shiftTargetKeys.indexOf(e)||(this.shiftTargetKeys.push(e),this.shiftTargets.push({x:a,y:b}))}},j.shift=function(a,b,c){var d,e=1/0,f={x:b,y:c};this.shiftTargets.forEach(function(a){var b=h(a,f);b<e&&(d=a,e=b)}),a.rect.x=d.x,a.rect.y=d.y};var k=120;j.itemDragMove=function(a,b,c){function d(){f.shift(e,b,c),e.positionDropPlaceholder(),f.layout()}var e=this.isEnabled&&this.getItem(a);if(e){b-=this.size.paddingLeft,
c-=this.size.paddingTop;var f=this,g=new Date;this._itemDragTime&&g-this._itemDragTime<k?(clearTimeout(this.dragTimeout),this.dragTimeout=setTimeout(d,k)):(d(),this._itemDragTime=g)}},j.itemDragEnd=function(a){function b(){2==++d&&(c.element.classList.remove("is-positioning-post-drag"),c.hideDropPlaceholder(),e.dispatchEvent("dragItemPositioned",null,[c]))}var c=this.isEnabled&&this.getItem(a);if(c){clearTimeout(this.dragTimeout),c.element.classList.add("is-positioning-post-drag");var d=0,e=this;c.once("layout",b),this.once("layoutComplete",b),c.moveTo(c.rect.x,c.rect.y),this.layout(),this.dragItemCount=Math.max(0,this.dragItemCount-1),this.sortItemsByPosition(),c.disablePlacing(),this.unstamp(c.element)}},j.bindDraggabillyEvents=function(a){this._bindDraggabillyEvents(a,"on")},j.unbindDraggabillyEvents=function(a){this._bindDraggabillyEvents(a,"off")},j._bindDraggabillyEvents=function(a,b){var c=this.handleDraggabilly;a[b]("dragStart",c.dragStart),a[b]("dragMove",c.dragMove),a[b]("dragEnd",c.dragEnd)},j.bindUIDraggableEvents=function(a){this._bindUIDraggableEvents(a,"on")},j.unbindUIDraggableEvents=function(a){this._bindUIDraggableEvents(a,"off")},j._bindUIDraggableEvents=function(a,b){var c=this.handleUIDraggable;a[b]("dragstart",c.start)[b]("drag",c.drag)[b]("dragstop",c.stop)};var l=j.destroy;return j.destroy=function(){l.apply(this,arguments),this.isEnabled=!1},i.Rect=c,i.Packer=d,i});