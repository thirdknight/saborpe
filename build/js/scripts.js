!function(e){var t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=t,r.d=function(e,t,o){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(o,n,function(t){return e[t]}.bind(null,n));return o},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=0)}({"./src/js/base/variables.js":
/*!**********************************!*\
  !*** ./src/js/base/variables.js ***!
  \**********************************/
/*! no static exports found */function(e,t){console.log("varible")},"./src/js/components/test.js":
/*!***********************************!*\
  !*** ./src/js/components/test.js ***!
  \***********************************/
/*! exports provided: default */function(e,t,r){"use strict";r.r(t);t.default=class{constructor(e,t){this.name=e,this.age=t}getInfo(){return`${this.name} and he is ${this.age} years old`}}},"./src/js/popup.js":
/*!*************************!*\
  !*** ./src/js/popup.js ***!
  \*************************/
/*! no static exports found */function(e,t){let r=document.querySelectorAll(".gallery-img"),o=document.querySelector("#popup"),n=document.querySelector("#popup-img"),s=document.querySelector("#popup-button");for(let e=0;e<r.length;e++)r[e].addEventListener("click",(function(e){o.classList.toggle("popup-open");let t=e.target.src;n.setAttribute("src",t)}));s.addEventListener("click",(function(){o.classList.toggle("popup-open")}))},"./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */function(e,t,r){"use strict";r.r(t);const o=new(r(/*! ./components/test */"./src/js/components/test.js").default)("Edinson is Software Enginure from Microsof",40);console.log(o.getInfo())},"./src/js/slider.js":
/*!**************************!*\
  !*** ./src/js/slider.js ***!
  \**************************/
/*! no static exports found */function(e,t){new Swiper(".swiper-container",{effect:"coverflow",grabCursor:!0,centeredSlides:!0,slidesPerView:"auto",coverflowEffect:{rotate:50,stretch:0,depth:200,modifier:1,slideShadows:!0},loop:!0})},0:
/*!*****************************************************************************************************************************!*\
  !*** multi ./src/js/popup.js ./src/js/scripts.js ./src/js/slider.js ./src/js/base/variables.js ./src/js/components/test.js ***!
  \*****************************************************************************************************************************/
/*! no static exports found */function(e,t,r){r(/*! /Users/edinson/Sites/saborpe/src/js/popup.js */"./src/js/popup.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/scripts.js */"./src/js/scripts.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/slider.js */"./src/js/slider.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/base/variables.js */"./src/js/base/variables.js"),e.exports=r(/*! /Users/edinson/Sites/saborpe/src/js/components/test.js */"./src/js/components/test.js")}});
//# sourceMappingURL=../sourcemaps/scripts.js.map
