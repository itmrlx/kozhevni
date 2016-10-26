!function(t){"use strict";var i=function(i,e,n){return this.el=i,this.$el=t(i),this.options=e,this.uuid=this.$el.attr("id")?this.$el.attr("id"):n,this.state={},this.init(),this};i.prototype={init:function(){var i=this;i._load(),i.$el.find("ul").each(function(e){var n=t(this);n.attr("data-index",e),i.options.save&&i.state.hasOwnProperty(e)?(n.parent().addClass(i.options.openClass),n.show()):n.parent().hasClass(i.options.openClass)?(n.show(),i.state[e]=1):n.hide()});var e=t("<span></span>").prepend(i.options.caretHtml),n=i.$el.find("li > a");i._trigger(e,!1),i._trigger(n,!0),i.$el.find("li:has(ul) > a ").prepend(e)},_trigger:function(i,e){var n=this;i.on("click",function(i){i.stopPropagation();var o=e?t(this).next():t(this).parent().next(),a=!1;if(o=o.length>0?o:!1,n.options.onClickBefore.call(this,i,o),!e||o&&a)i.preventDefault(),n._toggle(o,o.is(":hidden")),n._save();else if(n.options.accordion){var s=n.state=n._parents(t(this));n.$el.find("ul").filter(":visible").each(function(){var i=t(this),e=i.attr("data-index");s.hasOwnProperty(e)||n._toggle(i,!1)}),n._save()}n.options.onClickAfter.call(this,i,o)})},_toggle:function(i,e){var n=this,o=i.attr("data-index"),a=i.parent();if(n.options.onToggleBefore.call(this,i,e),e){if(a.addClass(n.options.openClass),i.slideDown(n.options.slide),n.state[o]=1,n.options.accordion){var s=n.state=n._parents(i);s[o]=n.state[o]=1,n.$el.find("ul").filter(":visible").each(function(){var i=t(this),e=i.attr("data-index");s.hasOwnProperty(e)||n._toggle(i,!1)})}}else a.removeClass(n.options.openClass),i.slideUp(n.options.slide),n.state[o]=0;n.options.onToggleAfter.call(this,i,e)},_parents:function(i,e){var n={},o=i.parent(),a=o.parents("ul");return a.each(function(){var i=t(this),o=i.attr("data-index");return o?void(n[o]=e?i:1):!1}),n},_save:function(){if(this.options.save){var i={};for(var n in this.state)1===this.state[n]&&(i[n]=1);e[this.uuid]=this.state=i,t.cookie(this.options.cookie.name,JSON.stringify(e),this.options.cookie)}},_load:function(){if(this.options.save){if(null===e){var i=t.cookie(this.options.cookie.name);e=i?JSON.parse(i):{}}this.state=e.hasOwnProperty(this.uuid)?e[this.uuid]:{}}},toggle:function(i){var e=this,n=arguments.length;if(1>=n)e.$el.find("ul").each(function(){var n=t(this);e._toggle(n,i)});else{var o,a={},s=Array.prototype.slice.call(arguments,1);n--;for(var r=0;n>r;r++){o=s[r];var l=e.$el.find('ul[data-index="'+o+'"]').first();if(l&&(a[o]=l,i)){var p=e._parents(l,!0);for(var c in p)a.hasOwnProperty(c)||(a[c]=p[c])}}for(o in a)e._toggle(a[o],i)}e._save()},destroy:function(){t.removeData(this.$el),this.$el.find("li:has(ul) > a").unbind("click"),this.$el.find("li:has(ul) > a > span").unbind("click")}},t.fn.navgoco=function(e){if("string"==typeof e&&"_"!==e.charAt(0)&&"init"!==e)var n=!0,o=Array.prototype.slice.call(arguments,1);else e=t.extend({},t.fn.navgoco.defaults,e||{}),t.cookie||(e.save=!1);return this.each(function(a){var s=t(this),r=s.data("navgoco");r||(r=new i(this,n?t.fn.navgoco.defaults:e,a),s.data("navgoco",r)),n&&r[e].apply(r,o)})};var e=null;t.fn.navgoco.defaults={caretHtml:"",accordion:!1,openClass:"open",save:!0,cookie:{name:"navgoco",expires:!1,path:"/"},slide:{duration:400,easing:"swing"},onClickBefore:t.noop,onClickAfter:t.noop,onToggleBefore:t.noop,onToggleAfter:t.noop}}(jQuery);
//# sourceMappingURL=navgoco-dist.js.map