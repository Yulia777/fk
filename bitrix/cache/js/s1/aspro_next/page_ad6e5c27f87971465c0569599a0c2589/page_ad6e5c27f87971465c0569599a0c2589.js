
; /* Start:"a:4:{s:4:"full";s:100:"/bitrix/templates/aspro_next/components/bitrix/news.list/items-accordion/script.min.js?1528272976744";s:6:"source";s:82:"/bitrix/templates/aspro_next/components/bitrix/news.list/items-accordion/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(document).ready(function(){$(".table .row.sid").length&&$(".table .row.sid").each(function(){$(this).find(".item:visible .image").sliceHeight({lineheight:-3}),$(this).find(".item:visible .properties").sliceHeight(),$(this).find(".item:visible .text").sliceHeight()}),$(".table.item-views .tabs a").length&&($(".table.item-views .tabs a").first().addClass("heightsliced"),$(".table.item-views .tabs a").on("click",function(){$(this).hasClass("heightsliced")||($(".table.item-views .tab-pane.active").find(".item .image").sliceHeight({lineheight:-3}),$(".table.item-views .tab-pane.active").find(".item .properties").sliceHeight(),$(".table.item-views .tab-pane.active").find(".item .text").sliceHeight(),$(this).addClass("heightsliced"))}))});
/* End */
;; /* /bitrix/templates/aspro_next/components/bitrix/news.list/items-accordion/script.min.js?1528272976744*/
