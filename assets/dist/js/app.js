jQuery(document).ready(function(e){e(document).foundation()}),function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"undefined"!=typeof module&&module.exports?module.exports=e(require("jquery")):e(jQuery)}(function(e){"use strict";function t(t){return!t.nodeName||-1!==e.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"])}function n(t){return e.isFunction(t)||e.isPlainObject(t)?t:{top:t,left:t}}var o=e.scrollTo=function(t,n,o){return e(window).scrollTo(t,n,o)};return o.defaults={axis:"xy",duration:0,limit:!0},e.fn.scrollTo=function(r,i,s){"object"==typeof i&&(s=i,i=0),"function"==typeof s&&(s={onAfter:s}),"max"===r&&(r=9e9),s=e.extend({},o.defaults,s),i=i||s.duration;var a=s.queue&&1<s.axis.length;return a&&(i/=2),s.offset=n(s.offset),s.over=n(s.over),this.each(function(){function l(t){var n=e.extend({},s,{queue:!0,duration:i,complete:t&&function(){t.call(f,p,s)}});d.animate(h,n)}if(null!==r){var c,u=t(this),f=u?this.contentWindow||window:this,d=e(f),p=r,h={};switch(typeof p){case"number":case"string":if(/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(p)){p=n(p);break}p=u?e(p):e(p,f);case"object":if(0===p.length)return;(p.is||p.style)&&(c=(p=e(p)).offset())}var m=e.isFunction(s.offset)&&s.offset(f,p)||s.offset;e.each(s.axis.split(""),function(e,t){var n="x"===t?"Left":"Top",r=n.toLowerCase(),i="scroll"+n,v=d[i](),g=o.max(f,t);c?(h[i]=c[r]+(u?0:v-d.offset()[r]),s.margin&&(h[i]-=parseInt(p.css("margin"+n),10)||0,h[i]-=parseInt(p.css("border"+n+"Width"),10)||0),h[i]+=m[r]||0,s.over[r]&&(h[i]+=p["x"===t?"width":"height"]()*s.over[r])):(n=p[r],h[i]=n.slice&&"%"===n.slice(-1)?parseFloat(n)/100*g:n),s.limit&&/^\d+$/.test(h[i])&&(h[i]=0>=h[i]?0:Math.min(h[i],g)),!e&&1<s.axis.length&&(v===h[i]?h={}:a&&(l(s.onAfterFirst),h={}))}),l(s.onAfter)}})},o.max=function(n,o){var r="x"===o?"Width":"Height",i="scroll"+r;if(!t(n))return n[i]-e(n)[r.toLowerCase()]();var r="client"+r,s=n.ownerDocument||n.document,a=s.documentElement,s=s.body;return Math.max(a[i],s[i])-Math.min(a[r],s[r])},e.Tween.propHooks.scrollLeft=e.Tween.propHooks.scrollTop={get:function(t){return e(t.elem)[t.prop]()},set:function(t){var n=this.get(t);if(t.options.interrupt&&t._last&&t._last!==n)return e(t.elem).stop();var o=Math.round(t.now);n!==o&&(e(t.elem)[t.prop](o),t._last=this.get(t))}},o}),jQuery(document).ready(function(e){console.log("ScrollTo!"),e.easing.elasout=function(e,t,n,o,r){var i=1.70158,s=0,a=o;if(0==t)return n;if(1==(t/=r))return n+o;if(s||(s=.3*r),a<Math.abs(o)){a=o;var i=s/4}else var i=s/(2*Math.PI)*Math.asin(o/a);return a*Math.pow(2,-10*t)*Math.sin((t*r-i)*(2*Math.PI)/s)+o+n},e("a.back").click(function(){return e(this).parents("div.pane").scrollTo(0,800,{queue:!0}),e(this).parents("div.section").find("span.message").text(this.title),!1}),e("#hero-panes a:not(.button)").click(function(t){var n=t.target;"_blank"!==n.target&&(t.preventDefault(),n.blur(),n.title&&e(this).parent().find("span.message").text(n.title))}),e("div.pane").scrollTo(0),e.scrollTo(0);var t=e("#pane-target");e("#hero-panes a").click(function(){t.stop(!0)}),e("#hero-panes .next-pane").click(function(){var n=e(this).closest("li").next("li");t.scrollTo(n,800)}),e("#hero-panes .previous-pane").click(function(){var n=e(this).closest("li").prev("li");t.scrollTo(n,800)});var n=e(document),o=e("#hero-panes li").length;console.log(o+" panes to scroll"),n.scroll(function(){30==n.scrollTop()&&t.scrollTo("li:eq(1)",800),100==n.scrollTop()&&t.scrollTo("li:eq(2)",800),150==n.scrollTop()&&t.scrollTo("li:eq(3)",800)})}),function(){var e=navigator.userAgent.toLowerCase().indexOf("webkit")>-1,t=navigator.userAgent.toLowerCase().indexOf("opera")>-1,n=navigator.userAgent.toLowerCase().indexOf("msie")>-1;(e||t||n)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e,t=location.hash.substring(1);/^[A-z0-9_-]+$/.test(t)&&(e=document.getElementById(t),e&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus()))},!1)}();