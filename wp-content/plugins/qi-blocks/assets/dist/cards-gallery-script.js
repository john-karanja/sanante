(()=>{"use strict";var e={n:t=>{var n=t&&t.__esModule?()=>t.default:()=>t;return e.d(n,{a:n}),n},d:(t,n)=>{for(var i in n)e.o(n,i)&&!e.o(t,i)&&Object.defineProperty(t,i,{enumerable:!0,get:n[i]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=jQuery;var n=e.n(t);document.addEventListener("DOMContentLoaded",(function(){i.init()}));const i={init:function(){this.holder=document.querySelectorAll(".qi-block-cards-gallery"),this.holder.length&&[...this.holder].map((e=>{i.initItem(e)}))},initItem:function(e){if(!e)return;let t,i=(e=n()(e)).find(".qodef-m-card"),o=e.data("orientation");switch(o){case"left":t="0 0 0 20%";break;case"right":t="0 20% 0 0"}n()(i.get().reverse()).each((function(){const r=n()(this);r.on("click",(function(){if(!i.last().is(r))return"both"===o&&(t=r.index()%2?"0 0 0 20%":"0 0 0 -20%"),r.addClass("qodef-out").animate({margin:t},200,"swing",(function(){r.detach(),r.insertAfter(i.last()).animate({margin:"0"},200,"swing",(function(){r.removeClass("qodef-out")})),i=e.find(".qodef-m-card")})),!1}))}))}}})();