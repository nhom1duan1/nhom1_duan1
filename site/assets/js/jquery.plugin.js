!function(){var r=!1;window.JQClass=function(){},JQClass.classes={},JQClass.extend=function t(e){var s=this.prototype;r=!0;var n=new this;for(var a in r=!1,e)n[a]="function"==typeof e[a]&&"function"==typeof s[a]?function(n,a){return function(){var t=this._super;this._super=function(t){return s[n].apply(this,t||[])};var e=a.apply(this,arguments);return this._super=t,e}}(a,e[a]):e[a];function i(){!r&&this._init&&this._init.apply(this,arguments)}return((i.prototype=n).constructor=i).extend=t,i}}(),function($){function camelCase(t){return t.replace(/-([a-z])/g,function(t,e){return e.toUpperCase()})}JQClass.classes.JQPlugin=JQClass.extend({name:"plugin",defaultOptions:{},regionalOptions:{},_getters:[],_getMarker:function(){return"is-"+this.name},_init:function(){$.extend(this.defaultOptions,this.regionalOptions&&this.regionalOptions[""]||{});var n=camelCase(this.name);$[n]=this,$.fn[n]=function(t){var e=Array.prototype.slice.call(arguments,1);return $[n]._isNotChained(t,e)?$[n][t].apply($[n],[this[0]].concat(e)):this.each(function(){if("string"==typeof t){if("_"===t[0]||!$[n][t])throw"Unknown method: "+t;$[n][t].apply($[n],[this].concat(e))}else $[n]._attach(this,t)})}},setDefaults:function(t){$.extend(this.defaultOptions,t||{})},_isNotChained:function(t,e){return"option"===t&&(0===e.length||1===e.length&&"string"==typeof e[0])||-1<$.inArray(t,this._getters)},_attach:function(t,e){if(!(t=$(t)).hasClass(this._getMarker())){t.addClass(this._getMarker()),e=$.extend({},this.defaultOptions,this._getMetadata(t),e||{});var n=$.extend({name:this.name,elem:t,options:e},this._instSettings(t,e));t.data(this.name,n),this._postAttach(t,n),this.option(t,e)}},_instSettings:function(t,e){return{}},_postAttach:function(t,e){},_getMetadata:function(elem){try{var data=elem.data(this.name.toLowerCase())||"";for(var name in data=data.replace(/'/g,'"'),data=data.replace(/([a-zA-Z0-9]+):/g,function(t,e,n){var a=data.substring(0,n).match(/"/g);return a&&a.length%2!=0?e+":":'"'+e+'":'}),data=$.parseJSON("{"+data+"}"),data){var value=data[name];"string"==typeof value&&value.match(/^new Date\((.*)\)$/)&&(data[name]=eval(value))}return data}catch(t){return{}}},_getInst:function(t){return $(t).data(this.name)||{}},option:function(t,e,n){var a=(t=$(t)).data(this.name);if(!e||"string"==typeof e&&null==n)return(s=(a||{}).options)&&e?s[e]:s;if(t.hasClass(this._getMarker())){var s=e||{};"string"==typeof e&&((s={})[e]=n),this._optionsChanged(t,a,s),$.extend(a.options,s)}},_optionsChanged:function(t,e,n){},destroy:function(t){(t=$(t)).hasClass(this._getMarker())&&(this._preDestroy(t,this._getInst(t)),t.removeData(this.name).removeClass(this._getMarker()))},_preDestroy:function(t,e){}}),$.JQPlugin={createPlugin:function(t,e){"object"==typeof t&&(e=t,t="JQPlugin"),t=camelCase(t);var n=camelCase(e.name);JQClass.classes[n]=JQClass.classes[t].extend(e),new JQClass.classes[n]}}}(jQuery);