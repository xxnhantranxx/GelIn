!function(){var t={7940:function(){window.jetpackForms=window.jetpackForms||{},window.jetpackForms.getBackgroundColor=function(t){let o=window.getComputedStyle(t).backgroundColor;for(;"rgba(0, 0, 0, 0)"===o&&t.parentNode&&t.parentNode.nodeType===window.Node.ELEMENT_NODE;)if("wp-block-cover"!==(t=t.parentNode).className)o=window.getComputedStyle(t).backgroundColor;else{const e=t.querySelector(".wp-block-cover__background");o=window.getComputedStyle(e).backgroundColor}return o},window.jetpackForms.generateStyleVariables=function(t){const o=window["editor-canvas"]?window["editor-canvas"].document:document,e=o.querySelector("body");if(!t)return;const n=o.createElement("div");n.className="contact-form__style-probe",n.style="position: absolute; z-index: -1; width: 1px; height: 1px; visibility: hidden",n.innerHTML='\n\t\t\t<div class="contact-form" style="">\n\t\t\t\t<div class="wp-block-button is-style-outline">\n\t\t\t\t\t<div class="wp-block-button__link">Test</div>\n\t\t\t\t</div>\n\t\t\t\t<div class="jetpack-field">\n\t\t\t\t\t<input class="jetpack-field__input" type="text">\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t',t.appendChild(n);const r=n.querySelector(".wp-block-button__link"),c=n.querySelector('input[type="text"]'),a=window.jetpackForms.getBackgroundColor(e),i=window.jetpackForms.getBackgroundColor(c),d=window.getComputedStyle(c).backgroundColor,l=window.getComputedStyle(r).borderColor,{color:p,padding:u,paddingTop:s,paddingLeft:f,border:k,borderColor:m,borderWidth:w,borderStyle:b,borderRadius:g,fontSize:y,fontFamily:j,lineHeight:v}=window.getComputedStyle(c);return n.remove(),{"--jetpack--contact-form--primary-color":l,"--jetpack--contact-form--background-color":a,"--jetpack--contact-form--text-color":p,"--jetpack--contact-form--border":k,"--jetpack--contact-form--border-color":m,"--jetpack--contact-form--border-size":w,"--jetpack--contact-form--border-style":b,"--jetpack--contact-form--border-radius":g,"--jetpack--contact-form--input-background":d,"--jetpack--contact-form--input-background-fallback":i,"--jetpack--contact-form--input-padding":u,"--jetpack--contact-form--input-padding-top":s,"--jetpack--contact-form--input-padding-left":f,"--jetpack--contact-form--font-size":y,"--jetpack--contact-form--font-family":j,"--jetpack--contact-form--line-height":v}}}},o={};function e(n){var r=o[n];if(void 0!==r)return r.exports;var c=o[n]={exports:{}};return t[n](c,c.exports,e),c.exports}e.n=function(t){var o=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(o,{a:o}),o},e.d=function(t,o){for(var n in o)e.o(o,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:o[n]})},e.o=function(t,o){return Object.prototype.hasOwnProperty.call(t,o)},function(){"use strict";e(7940);const{generateStyleVariables:t}=window.jetpackForms,o=setTimeout((()=>{n()}),3e3);function n(){const o=document.querySelectorAll(".wp-block-jetpack-contact-form-container");for(const e of o){const o=t(e);if(!o)return;for(const t in o)e.style.setProperty(t,o[t])}}window.addEventListener("load",(()=>{clearTimeout(o),n()}))}()}();