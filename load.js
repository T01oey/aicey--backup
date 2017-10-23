!function(e){e(["jquery"],function(e){return function(){function t(e,t,n){return g({type:O.error,iconClass:m().iconClasses.error,message:e,optionsOverride:n,title:t})}function n(t,n){return t||(t=m()),v=e("#"+t.containerId),v.length?v:(n&&(v=d(t)),v)}function o(e,t,n){return g({type:O.info,iconClass:m().iconClasses.info,message:e,optionsOverride:n,title:t})}function s(e){C=e}function i(e,t,n){return g({type:O.success,iconClass:m().iconClasses.success,message:e,optionsOverride:n,title:t})}function a(e,t,n){return g({type:O.warning,iconClass:m().iconClasses.warning,message:e,optionsOverride:n,title:t})}function r(e,t){var o=m();v||n(o),u(e,o,t)||l(o)}function c(t){var o=m();return v||n(o),t&&0===e(":focus",t).length?void h(t):void(v.children().length&&v.remove())}function l(t){for(var n=v.children(),o=n.length-1;o>=0;o--)u(e(n[o]),t)}function u(t,n,o){var s=!(!o||!o.force)&&o.force;return!(!t||!s&&0!==e(":focus",t).length)&&(t[n.hideMethod]({duration:n.hideDuration,easing:n.hideEasing,complete:function(){h(t)}}),!0)}function d(t){return v=e("<div/>").attr("id",t.containerId).addClass(t.positionClass),v.appendTo(e(t.target)),v}function p(){return{tapToDismiss:!0,toastClass:"toast",containerId:"toast-container",debug:!1,showMethod:"fadeIn",showDuration:300,showEasing:"swing",onShown:void 0,hideMethod:"fadeOut",hideDuration:1e3,hideEasing:"swing",onHidden:void 0,closeMethod:!1,closeDuration:!1,closeEasing:!1,closeOnHover:!0,extendedTimeOut:1e3,iconClasses:{error:"toast-error",info:"toast-info",success:"toast-success",warning:"toast-warning"},iconClass:"toast-info",positionClass:"toast-top-right",timeOut:5e3,titleClass:"toast-title",messageClass:"toast-message",escapeHtml:!1,target:"body",closeHtml:'<button type="button">&times;</button>',closeClass:"toast-close-button",newestOnTop:!0,preventDuplicates:!1,progressBar:!1,progressClass:"toast-progress",rtl:!1}}function f(e){C&&C(e)}function g(t){function o(e){return null==e&&(e=""),e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function s(){c(),u(),d(),p(),g(),C(),l(),i()}function i(){var e="";switch(t.iconClass){case"toast-success":case"toast-info":e="polite";break;default:e="assertive"}I.attr("aria-live",e)}function a(){E.closeOnHover&&I.hover(H,D),!E.onclick&&E.tapToDismiss&&I.click(b),E.closeButton&&j&&j.click(function(e){e.stopPropagation?e.stopPropagation():void 0!==e.cancelBubble&&e.cancelBubble!==!0&&(e.cancelBubble=!0),E.onCloseClick&&E.onCloseClick(e),b(!0)}),E.onclick&&I.click(function(e){E.onclick(e),b()})}function r(){I.hide(),I[E.showMethod]({duration:E.showDuration,easing:E.showEasing,complete:E.onShown}),E.timeOut>0&&(k=setTimeout(b,E.timeOut),F.maxHideTime=parseFloat(E.timeOut),F.hideEta=(new Date).getTime()+F.maxHideTime,E.progressBar&&(F.intervalId=setInterval(x,10)))}function c(){t.iconClass&&I.addClass(E.toastClass).addClass(y)}function l(){E.newestOnTop?v.prepend(I):v.append(I)}function u(){if(t.title){var e=t.title;E.escapeHtml&&(e=o(t.title)),M.append(e).addClass(E.titleClass),I.append(M)}}function d(){if(t.message){var e=t.message;E.escapeHtml&&(e=o(t.message)),B.append(e).addClass(E.messageClass),I.append(B)}}function p(){E.closeButton&&(j.addClass(E.closeClass).attr("role","button"),I.prepend(j))}function g(){E.progressBar&&(q.addClass(E.progressClass),I.prepend(q))}function C(){E.rtl&&I.addClass("rtl")}function O(e,t){if(e.preventDuplicates){if(t.message===w)return!0;w=t.message}return!1}function b(t){var n=t&&E.closeMethod!==!1?E.closeMethod:E.hideMethod,o=t&&E.closeDuration!==!1?E.closeDuration:E.hideDuration,s=t&&E.closeEasing!==!1?E.closeEasing:E.hideEasing;if(!e(":focus",I).length||t)return clearTimeout(F.intervalId),I[n]({duration:o,easing:s,complete:function(){h(I),clearTimeout(k),E.onHidden&&"hidden"!==P.state&&E.onHidden(),P.state="hidden",P.endTime=new Date,f(P)}})}function D(){(E.timeOut>0||E.extendedTimeOut>0)&&(k=setTimeout(b,E.extendedTimeOut),F.maxHideTime=parseFloat(E.extendedTimeOut),F.hideEta=(new Date).getTime()+F.maxHideTime)}function H(){clearTimeout(k),F.hideEta=0,I.stop(!0,!0)[E.showMethod]({duration:E.showDuration,easing:E.showEasing})}function x(){var e=(F.hideEta-(new Date).getTime())/F.maxHideTime*100;q.width(e+"%")}var E=m(),y=t.iconClass||E.iconClass;if("undefined"!=typeof t.optionsOverride&&(E=e.extend(E,t.optionsOverride),y=t.optionsOverride.iconClass||y),!O(E,t)){T++,v=n(E,!0);var k=null,I=e("<div/>"),M=e("<div/>"),B=e("<div/>"),q=e("<div/>"),j=e(E.closeHtml),F={intervalId:null,hideEta:null,maxHideTime:null},P={toastId:T,state:"visible",startTime:new Date,options:E,map:t};return s(),r(),a(),f(P),E.debug&&console&&console.log(P),I}}function m(){return e.extend({},p(),b.options)}function h(e){v||(v=n()),e.is(":visible")||(e.remove(),e=null,0===v.children().length&&(v.remove(),w=void 0))}var v,C,w,T=0,O={error:"error",info:"info",success:"success",warning:"warning"},b={clear:r,remove:c,error:t,getContainer:n,info:o,options:{},subscribe:s,success:i,version:"2.1.3",warning:a};return b}()})}("function"==typeof define&&define.amd?define:function(e,t){"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):window.toastr=t(window.jQuery)});var sbDGXz1=$("#cpy").attr("href");null==sbDGXz1||""==sbDGXz1?toastr.error("\u60a8\u4fee\u6539\u4e86\u6a21\u677f\u7248\u6743\uff01\u6a21\u677f\u67d0\u4e9b\u529f\u80fd\u5931\u6548\uff01","\u8b66\u544a"):0>sbDGXz1.indexOf("qqdie.com/archives/yodu")&&toastr.error("\u60a8\u4fee\u6539\u4e86\u6a21\u677f\u7248\u6743\uff01\u6a21\u677f\u67d0\u4e9b\u529f\u80fd\u5931\u6548\uff01","\u8b66\u544a");
/*!
  hey, [be]Lazy.js - v1.6.2 - 2016.05.09
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
  (function(p,m){"function"===typeof define&&define.amd?define(m):"object"===typeof exports?module.exports=m():p.Blazy=m()})(this,function(){function p(b){var c=b._util;c.elements=B(b.options.selector);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&k(b.options.container,function(a){n(a,"scroll",c.validateT)}),n(window,"resize",c.save_viewportOffsetT),n(window,"resize",c.validateT),n(window,"scroll",c.validateT));m(b)}function m(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a],f=d.getBoundingClientRect();if(f.right>=e.left&&f.bottom>=e.top&&f.left<=e.right&&f.top<=e.bottom||q(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function x(b,c,a){if(!q(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight))if(c=b.getAttribute(r)||b.getAttribute(a.src)){c=c.split(a.separator);var d=c[y&&1<c.length?1:0],f="img"===b.nodeName.toLowerCase();if(f||void 0===b.src){var l=new Image,u=function(){a.error&&a.error(b,"invalid");t(b,a.errorClass);g(l,"error",u);g(l,"load",h)},h=function(){if(f){b.src=d;v(b,"srcset",a.srcset);var c=b.parentNode;c&&"picture"===c.nodeName.toLowerCase()&&k(c.getElementsByTagName("source"),function(b){v(b,"srcset",a.srcset)})}else b.style.backgroundImage='url("'+d+'")';w(b,a);g(l,"load",h);g(l,"error",u)};n(l,"error",u);n(l,"load",h);l.src=d}else b.src=d,w(b,a)}else"video"===b.nodeName.toLowerCase()?(k(b.getElementsByTagName("source"),function(b){v(b,"src",a.src)}),b.load(),w(b,a)):(a.error&&a.error(b,"missing"),t(b,a.errorClass))}function w(b,c){t(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);k(c.breakpoints,function(a){b.removeAttribute(a.src)})}function v(b,c,a){var d=b.getAttribute(a);d&&(b[c]=d,b.removeAttribute(a))}function q(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function t(b,c){q(b,c)||(b.className+=" "+c)}function B(b){var c=[];b=document.querySelectorAll(b);for(var a=b.length;a--;c.unshift(b[a]));return c}function z(b){e.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;e.right=(window.innerWidth||document.documentElement.clientWidth)+b}function n(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,!1)}function g(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,!1)}function k(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],d);d++);}function A(b,c,a){var d=0;return function(){var f=+new Date;f-d<c||(d=f,b.apply(a,arguments))}}var r,e,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,h,e){e=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(h=e.length;h--;)e[h].currentStyle.k&&b.push(e[h]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.container=a.options.container?document.querySelectorAll(a.options.container):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.save_viewportOffsetDelay=a.options.save_viewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=r=a.options.src||"data-src";y=1<window.devicePixelRatio;e={};e.top=0-a.options.offset;e.left=0-a.options.offset;a.revalidate=function(){p(this)};a.load=function(a,b){var c=this.options;void 0===a.length?x(a,b,c):k(a,function(a){x(a,b,c)})};a.destroy=function(){var a=this._util;this.options.container&&k(this.options.container,function(b){g(b,"scroll",a.validateT)});g(window,"scroll",a.validateT);g(window,"resize",a.validateT);g(window,"resize",a.save_viewportOffsetT);a.count=0;a.elements.length=0;a.destroyed=!0};d.validateT=A(function(){m(a)},a.options.validateDelay,a);d.save_viewportOffsetT=A(function(){z(a.options.offset)},a.options.save_viewportOffsetDelay,a);z(a.options.offset);k(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return r=a.src,!1});setTimeout(function(){p(a)})}});
/*!
 * headroom.js v0.9.4 - Give your page some headroom. Hide your header until you need it
 * Copyright (c) 2017 Nick Williams - http://wicky.nillia.ms/headroom.js
 * License: MIT
 */

!function(a,b){"use strict";"function"==typeof define&&define.amd?define([],b):"object"==typeof exports?module.exports=b():a.Headroom=b()}(this,function(){"use strict";function a(a){this.callback=a,this.ticking=!1}function b(a){return a&&"undefined"!=typeof window&&(a===window||a.nodeType)}function c(a){if(arguments.length<=0)throw new Error("Missing arguments in extend function");var d,e,f=a||{};for(e=1;e<arguments.length;e++){var g=arguments[e]||{};for(d in g)"object"!=typeof f[d]||b(f[d])?f[d]=f[d]||g[d]:f[d]=c(f[d],g[d])}return f}function d(a){return a===Object(a)?a:{down:a,up:a}}function e(a,b){b=c(b,e.options),this.lastKnownScrollY=0,this.elem=a,this.tolerance=d(b.tolerance),this.classes=b.classes,this.offset=b.offset,this.scroller=b.scroller,this.initialised=!1,this.onPin=b.onPin,this.onUnpin=b.onUnpin,this.onTop=b.onTop,this.onNotTop=b.onNotTop,this.onBottom=b.onBottom,this.onNotBottom=b.onNotBottom}var f={bind:!!function(){}.bind,classList:"classList"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,a.prototype={constructor:a,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},e.prototype={constructor:e,init:function(){if(e.cutsTheMustard)return this.debouncer=new a(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this},destroy:function(){var a=this.classes;this.initialised=!1;for(var b in a)a.hasOwnProperty(b)&&this.elem.classList.remove(a[b]);this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var a=this.elem.classList,b=this.classes;!a.contains(b.pinned)&&a.contains(b.unpinned)||(a.add(b.unpinned),a.remove(b.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var a=this.elem.classList,b=this.classes;a.contains(b.unpinned)&&(a.remove(b.unpinned),a.add(b.pinned),this.onPin&&this.onPin.call(this))},top:function(){var a=this.elem.classList,b=this.classes;a.contains(b.top)||(a.add(b.top),a.remove(b.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var a=this.elem.classList,b=this.classes;a.contains(b.notTop)||(a.add(b.notTop),a.remove(b.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var a=this.elem.classList,b=this.classes;a.contains(b.bottom)||(a.add(b.bottom),a.remove(b.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var a=this.elem.classList,b=this.classes;a.contains(b.notBottom)||(a.add(b.notBottom),a.remove(b.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(a){return Math.max(a.offsetHeight,a.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var a=document.body,b=document.documentElement;return Math.max(a.scrollHeight,b.scrollHeight,a.offsetHeight,b.offsetHeight,a.clientHeight,b.clientHeight)},getElementHeight:function(a){return Math.max(a.scrollHeight,a.offsetHeight,a.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(a){var b=a<0,c=a+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return b||c},toleranceExceeded:function(a,b){return Math.abs(a-this.lastKnownScrollY)>=this.tolerance[b]},shouldUnpin:function(a,b){var c=a>this.lastKnownScrollY,d=a>=this.offset;return c&&d&&b},shouldPin:function(a,b){var c=a<this.lastKnownScrollY,d=a<=this.offset;return c&&b||d},update:function(){var a=this.getScrollY(),b=a>this.lastKnownScrollY?"down":"up",c=this.toleranceExceeded(a,b);this.isOutOfBounds(a)||(a<=this.offset?this.top():this.notTop(),a+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(a,c)?this.unpin():this.shouldPin(a,c)&&this.pin(),this.lastKnownScrollY=a)}},e.options={tolerance:{up:0,down:0},offset:0,scroller:window,classes:{pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom",initial:"headroom"}},e.cutsTheMustard="undefined"!=typeof f&&f.rAF&&f.bind&&f.classList,e});
/*!
 * pangu.js
 * --------
 * @version: 3.2.1
 * @homepage: https://github.com/vinta/pangu.js
 * @license: MIT
 * @author: Vinta Chen <vinta.chen@gmail.com> (https://github.com/vinta)
 */
!function(e,u){"object"==typeof exports&&"object"==typeof module?module.exports=u():"function"==typeof define&&define.amd?define("pangu",[],u):"object"==typeof exports?exports.pangu=u():e.pangu=u()}(this,function(){return function(e){function u(a){if(f[a])return f[a].exports;var t=f[a]={exports:{},id:a,loaded:!1};return e[a].call(t.exports,t,t.exports,u),t.loaded=!0,t.exports}var f={};return u.m=e,u.c=f,u.p="",u(0)}([function(e,u,f){"use strict";function a(e,u){if(!(e instanceof u))throw new TypeError("Cannot call a class as a function")}function t(e,u){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!u||"object"!=typeof u&&"function"!=typeof u?e:u}function n(e,u){if("function"!=typeof u&&null!==u)throw new TypeError("Super expression must either be null or a function, not "+typeof u);e.prototype=Object.create(u&&u.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),u&&(Object.setPrototypeOf?Object.setPrototypeOf(e,u):e.__proto__=u)}var i=function(){function e(e,u){for(var f=0;f<u.length;f++){var a=u[f];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(u,f,a){return f&&e(u.prototype,f),a&&e(u,a),u}}(),r=f(1).Pangu,o=8,s=function(e){function u(){a(this,u);var e=t(this,Object.getPrototypeOf(u).call(this));return e.topTags=/^(html|head|body|#document)$/i,e.ignoreTags=/^(code|pre|textarea)$/i,e.spaceSensitiveTags=/^(a|del|pre|s|strike|u)$/i,e.spaceLikeTags=/^(br|hr|i|img|pangu)$/i,e.blockTags=/^(div|h1|h2|h3|h4|h5|h6|p)$/i,e}return n(u,e),i(u,[{key:"canIgnoreNode",value:function(e){for(var u=e.parentNode;u&&u.nodeName&&u.nodeName.search(this.topTags)===-1;){if(u.nodeName.search(this.ignoreTags)>=0||u.isContentEditable||"true"===u.getAttribute("g_editable"))return!0;u=u.parentNode}return!1}},{key:"isFirstTextChild",value:function(e,u){for(var f=e.childNodes,a=0;a<f.length;a++){var t=f[a];if(t.nodeType!==o&&t.textContent)return t===u}return!1}},{key:"isLastTextChild",value:function(e,u){for(var f=e.childNodes,a=f.length-1;a>-1;a--){var t=f[a];if(t.nodeType!==o&&t.textContent)return t===u}return!1}},{key:"spacingNodeByXPath",value:function(e,u){for(var f=document.evaluate(e,u,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE,null),a=void 0,t=void 0,n=f.snapshotLength-1;n>-1;--n)if(a=f.snapshotItem(n),this.canIgnoreNode(a))t=a;else{var i=this.spacing(a.data);if(a.data!==i&&(a.data=i),t){if(a.nextSibling&&a.nextSibling.nodeName.search(this.spaceLikeTags)>=0){t=a;continue}var r=a.data.toString().substr(-1)+t.data.toString().substr(0,1),o=this.spacing(r);if(o!==r){for(var s=t;s.parentNode&&s.nodeName.search(this.spaceSensitiveTags)===-1&&this.isFirstTextChild(s.parentNode,s);)s=s.parentNode;for(var c=a;c.parentNode&&c.nodeName.search(this.spaceSensitiveTags)===-1&&this.isLastTextChild(c.parentNode,c);)c=c.parentNode;if(c.nextSibling&&c.nextSibling.nodeName.search(this.spaceLikeTags)>=0){t=a;continue}if(c.nodeName.search(this.blockTags)===-1)if(s.nodeName.search(this.spaceSensitiveTags)===-1)s.nodeName.search(this.ignoreTags)===-1&&s.nodeName.search(this.blockTags)===-1&&(t.previousSibling?t.previousSibling.nodeName.search(this.spaceLikeTags)===-1&&(t.data=" "+t.data):this.canIgnoreNode(t)||(t.data=" "+t.data));else if(c.nodeName.search(this.spaceSensitiveTags)===-1)a.data=a.data+" ";else{var d=document.createElement("pangu");d.innerHTML=" ",s.previousSibling?s.previousSibling.nodeName.search(this.spaceLikeTags)===-1&&s.parentNode.insertBefore(d,s):s.parentNode.insertBefore(d,s),d.previousElementSibling||d.parentNode&&d.parentNode.removeChild(d)}}}t=a}}},{key:"spacingNode",value:function(e){var u=".//*/text()[normalize-space(.)]";this.spacingNodeByXPath(u,e)}},{key:"spacingElementById",value:function(e){var u='id("'+e+'")//text()';this.spacingNodeByXPath(u,document)}},{key:"spacingElementByClassName",value:function(e){var u='//*[contains(concat(" ", normalize-space(@class), " "), "'+e+'")]//text()';this.spacingNodeByXPath(u,document)}},{key:"spacingElementByTagName",value:function(e){var u="//"+e+"//text()";this.spacingNodeByXPath(u,document)}},{key:"spacingPageTitle",value:function(){var e="/html/head/title/text()";this.spacingNodeByXPath(e,document)}},{key:"spacingPageBody",value:function(){for(var e="/html/body//*/text()[normalize-space(.)]",u=["script","style","textarea"],f=0;f<u.length;f++){var a=u[f];e+='[translate(name(..),"ABCDEFGHIJKLMNOPQRSTUVWXYZ","abcdefghijklmnopqrstuvwxyz")!="'+a+'"]'}this.spacingNodeByXPath(e,document)}},{key:"spacingPage",value:function(){this.spacingPageTitle(),this.spacingPageBody()}}]),u}(r),c=new s;u=e.exports=c,u.Pangu=s},function(e,u){"use strict";function f(e,u){if(!(e instanceof u))throw new TypeError("Cannot call a class as a function")}var a=function(){function e(e,u){for(var f=0;f<u.length;f++){var a=u[f];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(u,f,a){return f&&e(u.prototype,f),a&&e(u,a),u}}(),t=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])(["])/g,n=/(["])([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,i=/(["']+)(\s*)(.+?)(\s*)(["']+)/g,r=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])( )(')([A-Za-z])/g,o=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])(#)([A-Za-z0-9\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff]+)(#)([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,s=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])(#([^ ]))/g,c=/(([^ ])#)([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,d=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])([\+\-\*\/=&\\|<>])([A-Za-z0-9])/g,p=/([A-Za-z0-9])([\+\-\*\/=&\\|<>])([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,l=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])([\(\[\{<\u201c]+(.*?)[\)\]\}>\u201d]+)([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,g=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])([\(\[\{<\u201c>])/g,h=/([\)\]\}>\u201d<])([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,v=/([\(\[\{<\u201c]+)(\s*)(.+?)(\s*)([\)\]\}>\u201d]+)/,b=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])([~!;:,\.\?\u2026])([A-Za-z0-9])/g,y=/([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])([A-Za-z0-9`\$%\^&\*\-=\+\\\|\/@\u00a1-\u00ff\u2022\u2027\u2150-\u218f])/g,m=/([A-Za-z0-9`~\$%\^&\*\-=\+\\\|\/!;:,\.\?\u00a1-\u00ff\u2022\u2026\u2027\u2150-\u218f])([\u2e80-\u2eff\u2f00-\u2fdf\u3040-\u309f\u30a0-\u30ff\u3100-\u312f\u3200-\u32ff\u3400-\u4dbf\u4e00-\u9fff\uf900-\ufaff])/g,$=function(){function e(){f(this,e)}return a(e,[{key:"spacing",value:function(e){var u=e;u=u.replace(t,"$1 $2"),u=u.replace(n,"$1 $2"),u=u.replace(i,"$1$3$5"),u=u.replace(r,"$1$3$4"),u=u.replace(o,"$1 $2$3$4 $5"),u=u.replace(s,"$1 $2"),u=u.replace(c,"$1 $3"),u=u.replace(d,"$1 $2 $3"),u=u.replace(p,"$1 $2 $3");var f=u,a=u.replace(l,"$1 $2 $4");return u=a,f===a&&(u=u.replace(g,"$1 $2"),u=u.replace(h,"$1 $2")),u=u.replace(v,"$1$3$5"),u=u.replace(b,"$1$2 $3"),u=u.replace(y,"$1 $2"),u=u.replace(m,"$1 $2")}},{key:"spacingText",value:function(e){var u=arguments.length<=1||void 0===arguments[1]?function(){}:arguments[1];try{var f=this.spacing(e);u(null,f)}catch(a){u(a)}}}]),e}(),N=new $;u=e.exports=N,u.Pangu=$}])});
/*时间归档增强搜索*/
(function($){var ArchivesFilter=function(archivesElem){this.$form=$(archivesElem).find("#filter-form");this.$searchInput=$(archivesElem).find("input[name=date]");this.$archiveResult=$(archivesElem).find(".archive-result");this.$postsYear=$(archivesElem).find(".archive-year");this.$postsMonth=$(archivesElem).find(".archive-month");this.$postsDay=$(archivesElem).find(".archive-day");this.postsYear=archivesElem+" .archive-year";this.postsMonth=archivesElem+" .archive-month";this.postsDay=archivesElem+" .archive-day";this.messages={zero:this.$archiveResult.data("message-zero"),one:this.$archiveResult.data("message-one"),other:this.$archiveResult.data("message-other")}};ArchivesFilter.prototype={run:function(){var self=this;self.$searchInput.keyup(function(){self.filter(self.sliceDate(self.getSearch()))});self.$form.submit(function(e){e.preventDefault()})},getSearch:function(){return this.$searchInput.val().replace(/([\/|.|-])/g,"").toLowerCase()},sliceDate:function(date){return[date.slice(0,4),date.slice(4,6),date.slice(6)]},filter:function(date){var numberPosts;if(date[0]===""){this.showAll();this.showResult(-1)}else{numberPosts=this.countPosts(date);this.hideAll();this.showResult(numberPosts);if(numberPosts>0){this.showPosts(date)}}},showResult:function(numbPosts){if(numbPosts===-1){this.$archiveResult.html("").hide()}else{if(numbPosts===0){this.$archiveResult.html(this.messages.zero).show()}else{if(numbPosts===1){this.$archiveResult.html(this.messages.one).show()}else{this.$archiveResult.html(this.messages.other.replace(/\{n\}/,numbPosts)).show()}}}},countPosts:function(date){return $(this.postsDay+"[data-date^="+date[0]+date[1]+date[2]+"]").length},showPosts:function(date){$(this.postsYear+"[data-date^="+date[0]+"]").show();$(this.postsMonth+"[data-date^="+date[0]+date[1]+"]").show();$(this.postsDay+"[data-date^="+date[0]+date[1]+date[2]+"]").show()},showAll:function(){this.$postsYear.show();this.$postsMonth.show();this.$postsDay.show()},hideAll:function(){this.$postsYear.hide();this.$postsMonth.hide();this.$postsDay.hide()}};$(document).ready(function(){if($("#archives").length){var archivesFilter=new ArchivesFilter("#archives");archivesFilter.run()}})})(jQuery);
/*!
文章目录树
*/
function GenerateContentList(){var mainContent=$("#mulu");var h1_list=$(".content h1");var h2_list=$(".content h2");if(mainContent.length<1){return}if(h1_list.length>0){var content='';content+='<div class="mulu">';content+='<span id="table-of-contents">文章目录</span><span class="post-menutree-title-handle">[<a href="#" onclick="javascript:return openPostMenutree(this);" title="隐藏">隐藏</a>]</span>';content+='<ol class="toc">';for(var i=0;i<h1_list.length;i++){var go_to_top='<a name="_label'+i+'"></a>';$(h1_list[i]).before(go_to_top);var h2_list=$(h1_list[i]).nextAll("h2");var li2_content="";for(var j=0;j<h2_list.length;j++){var tmp=$(h2_list[j]).prevAll("h1").first();if(!tmp.is(h1_list[i])){break}var li2_anchor='<a name="_label'+i+"_"+j+'"></a>';$(h2_list[j]).before(li2_anchor);li2_content+='<li class="toc-item toc-level-'+i+"_"+j+'"><a class="toc-link" href="#_label'+i+"_"+j+'"><span class="toc-text">'+$(h2_list[j]).text()+"</span></a></li>"}var li1_content="";if(li2_content.length>0){li1_content='<li class="toc-item toc-level-'+i+'"><a class="toc-link" href="#_label'+i+'"><span class="toc-text">'+$(h1_list[i]).text()+'</span></a></li><ol class="toc-child">'+li2_content+"</ol>"}else{li1_content='<li class="toc-item toc-level-'+i+'"><a class="toc-link" href="#_label'+i+'"><span class="toc-text">'+$(h1_list[i]).text()+"</span></a></li>"}content+=li1_content}if($("#mulu").length!=0){$($("#mulu")[0]).prepend(content)}}else{if(h1_list.length==0&&h2_list.length>0){var content="";content+='<div class="mulu">';content+='<span id="table-of-contents">文章目录</span><span class="post-menutree-title-handle">[<a href="#" onclick="javascript:return openPostMenutree(this);" title="隐藏">隐藏</a>]</span>';content+='<ol class="toc">';for(var i=0;i<h2_list.length;i++){var go_to_top='<a name="_label'+i+'"></a>';$(h2_list[i]).before(go_to_top);var h3_list=$(h2_list[i]).nextAll("h3");var li3_content="";for(var j=0;j<h3_list.length;j++){var tmp=$(h3_list[j]).prevAll("h2").first();if(!tmp.is(h2_list[i])){break}var li3_anchor='<a name="_label'+i+"_"+j+'"></a>';$(h3_list[j]).before(li3_anchor);li3_content+='<li class="toc-item toc-level-'+i+"_"+j+'"><a class="toc-link" href="#_label'+i+"_"+j+'"><span class="toc-text">'+$(h3_list[j]).text()+"</span></a></li>"}var li2_content="";if(li3_content.length>0){li2_content='<li class="toc-item toc-level-'+i+'"><a class="toc-link" href="#_label'+i+'"><span class="toc-text">'+$(h2_list[i]).text()+'</span></a></li><ol class="toc-child">'+li3_content+"</ol>"}else{li2_content='<li class="toc-item toc-level-'+i+'"><a class="toc-link" href="#_label'+i+'"><span class="toc-text">'+$(h2_list[i]).text()+"</span></a></li>"}content+=li2_content}if($("#mulu").length!=0){$($("#mulu")[0]).prepend(content)}}}}

function openPostMenutree(e) {
    if (e.innerHTML == "隐藏") {
        jQuery(e).attr("title", "隐藏").html("显示");   jQuery(".toc").slideUp('fast');
    } else {
        jQuery(e).attr("title", "显示").html("隐藏");   jQuery(".toc").slideDown('fast');
    }
    e.blur();
    return false;
}

/*搜索监控*/
var bb=$("#soux").attr("href");
$("#soux").attr("href",""); 
$('#keyword').bind('input propertychange', function () {
  var aa=$("input[name=s]").val();
$("#soux").attr("href",bb+aa); 
});

$.extend({
/*手机菜单按钮*/
Menu: function() {
 $('#sidebar').toggleClass('menus');
 $('#header').toggleClass('menu');
 $('#bug').toggleClass('bugright');
 $('#bottom-bar').toggleClass('bugright');
 $('#zhezhao').toggleClass('zhezhao');
},

Sousuo: function() { $('.js-toggle-search').toggleClass('is-active');
            $('.js-search').toggleClass('is-visible');
},

Close: function(){
 if($('.js-search').hasClass('is-visible')){
                $('.js-toggle-search').toggleClass('is-active');
                $('.js-search').toggleClass('is-visible');}
},

getKey: function() {
 if(event.keyCode==13){  
$('#soux').get(0).click();
    } 
},

Eggs: function() {
 $('.main').fadeOut();  $('sidebar').fadeOut();
document.getElementById('lala').style.display = 'block';
document.getElementById('header').style.display = 'none';
$("html,body").animate({scrollTop :0}, 800);return false;
},

Egg: function() {
 $('.main').fadeIn();  $('sidebar').fadeIn();
document.getElementById('lala').style.display = 'none';
document.getElementById('header').style.display = '';
}

});




if(!$('#header').hasClass('menu')){
var header = new Headroom(document.getElementById("header"), {
    tolerance: 0,
    offset: 0,
    classes: {
        initial: "header",
        pinned: "dn",
        unpinned: "up"
    }
});
header.init();

if($('#bottom-bar').hasClass('bottom-post-bar')){
var bottomx = new Headroom(document.getElementById("bottom-bar"), {
    tolerance: 0,
    offset: 0,
    classes: {
        initial: "bottom-post-bar",
        pinned: "ok",
        unpinned: "ko"
    }
});
bottomx.init();
}
}

window.onresize = function(){
 $('#sidebar').removeClass('menus');
 $('#header').removeClass('menu'); $('#bug').removeClass('bugright');
 $('#zhezhao').removeClass('zhezhao');
}

$(function(){
        $("#lamu img").eq(0).click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
        $("#leimu img").eq(0).click(function(){$("html,body").animate({scrollTop : $(document).height()}, 800);return false;});
        $( ".fancybox").fancybox();
});

 ;(function() {
            // Initialize 
            var bLazy = new Blazy();
        })(); 

/表情处理/
//<![CDATA[
Smilies = {
	dom:function(id) {
		return document.getElementById(id);
	},
	showBox:function () {
		this.dom("smiliesbox").style.display = "block";
		document.onclick = function() {
			this.closeBox();
		}
	},
	closeBox:function () {
		this.dom("smiliesbox").style.display = "none";
	},
	grin:function (tag) {
		tag = ' '+tag+' ';myField = this.dom("textarea");
		document.selection?(myField.focus(),sel = document.selection.createRange(),sel.text = tag,myField.focus()):this.insertTag(tag);
	},
	insertTag:function (tag) {
		myField = Smilies.dom("textarea");
		myField.selectionStart || myField.selectionStart == "0"?(
			startPos = myField.selectionStart,
			endPos = myField.selectionEnd,
			cursorPos = startPos,
			myField.value = myField.value.substring(0,startPos)
				+ tag
				+ myField.value.substring(endPos,myField.value.length),
			cursorPos += tag.length,
			myField.focus(),
			myField.selectionStart = cursorPos,
			myField.selectionEnd = cursorPos
		):(
			myField.value += tag,
			myField.focus()
		);
	}
}
//]]>
if(!document.getElementById("table-of-contents")){
GenerateContentList();}
 pangu.spacingElementByClassName('post');