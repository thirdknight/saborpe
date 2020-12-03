!function(e){var t={};function r(s){if(t[s])return t[s].exports;var n=t[s]={i:s,l:!1,exports:{}};return e[s].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=t,r.d=function(e,t,s){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:s})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var s=Object.create(null);if(r.r(s),Object.defineProperty(s,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(s,n,function(t){return e[t]}.bind(null,n));return s},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=0)}({"./src/js/base/variables.js":
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
/*! no static exports found */function(e,t){},"./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */function(e,t,r){"use strict";r.r(t);const s=new(r(/*! ./components/test */"./src/js/components/test.js").default)("Edinson is Software Enginure from Microsof",40);console.log(s.getInfo())},"./src/js/slider.js":
/*!**************************!*\
  !*** ./src/js/slider.js ***!
  \**************************/
/*! no static exports found */function(e,t){new Swiper(".swiper-container",{effect:"coverflow",grabCursor:!0,centeredSlides:!0,slidesPerView:"auto",coverflowEffect:{rotate:50,stretch:0,depth:200,modifier:1,slideShadows:!0},loop:!0,autoplay:{delay:3e3,disableOnInteraction:!1}})},0:
/*!*****************************************************************************************************************************!*\
  !*** multi ./src/js/popup.js ./src/js/scripts.js ./src/js/slider.js ./src/js/base/variables.js ./src/js/components/test.js ***!
  \*****************************************************************************************************************************/
/*! no static exports found */function(e,t,r){r(/*! /Users/edinson/Sites/saborpe/src/js/popup.js */"./src/js/popup.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/scripts.js */"./src/js/scripts.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/slider.js */"./src/js/slider.js"),r(/*! /Users/edinson/Sites/saborpe/src/js/base/variables.js */"./src/js/base/variables.js"),e.exports=r(/*! /Users/edinson/Sites/saborpe/src/js/components/test.js */"./src/js/components/test.js")}});
//# sourceMappingURL=../sourcemaps/scripts.js.map
