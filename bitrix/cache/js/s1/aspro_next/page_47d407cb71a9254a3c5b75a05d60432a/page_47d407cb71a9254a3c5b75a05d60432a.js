
; /* Start:"a:4:{s:4:"full";s:91:"/bitrix/templates/aspro_next/components/bitrix/news.detail/news/script.min.js?1528272976698";s:6:"source";s:73:"/bitrix/templates/aspro_next/components/bitrix/news.detail/news/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){$(".docs-block .blocks").length&&$(".docs-block .blocks .inner-wrapper").sliceHeight({row:".blocks",item:".inner-wrapper"}),$(".projects.item-views").length&&($(".projects.item-views .item .image").sliceHeight({lineheight:-3}),$(".projects.item-views .item").sliceHeight()),$(".items-services .item").sliceHeight(),SetFixedAskBlock()}),BX.addCustomEvent("onSlideInit",function(e){try{if(ignoreResize.push(!0),e){var i=e.slider;i.hasClass("small_slider")&&$(".detail .small-gallery-block .item").sliceHeight({lineheight:-3}),i.hasClass("big_slider")&&$(".detail .big_slider .item").sliceHeight({lineheight:-3})}$(window).resize()}catch(s){}finally{ignoreResize.pop()}});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:102:"/bitrix/templates/aspro_next/components/bitrix/catalog.top/products_slider/script.min.js?1528272976361";s:6:"source";s:84:"/bitrix/templates/aspro_next/components/bitrix/catalog.top/products_slider/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
BX.addCustomEvent("onSlideInit",function(e){try{if(ignoreResize.push(!0),e){e.slider;$(".wrapper_block .content_inner .slides").equalize({children:".item-title"}),$(".wrapper_block .content_inner .slides").equalize({children:".item_info"}),$(".wrapper_block .content_inner .slides").equalize({children:".catalog_item"})}}catch(i){}finally{ignoreResize.pop()}});
/* End */
;; /* /bitrix/templates/aspro_next/components/bitrix/news.detail/news/script.min.js?1528272976698*/
; /* /bitrix/templates/aspro_next/components/bitrix/catalog.top/products_slider/script.min.js?1528272976361*/
