!function(C,r){r.fieldTypes.list=function(t,o){var x={itemId:0,rootList:!1,init:function(){C.isArray(o.items)?(x.rootList=t.find("ul"),C.each(o.items,function(e,t){x.addRecursiveItem(x.rootList,t)})):x.addItem(t.find(".contentblocks-field-list-outer"),{value:""}),t.find("ul, ol").sortable({items:"li",connectWith:".contentblocks-field-list-outer ul, .contentblocks-field-list-outer ol",forceHelperSize:!0,forcePlaceholderSizeType:!0,placeholder:"ui-sortable-list-placeholder",tolerance:"pointer",cursor:"move",cancel:"input,textarea,button,select,option",handle:".contentblocks-field-list-move",update:function(e,t){t.item.trigger("contentblocks:field_dragged"),r.fixColumnHeights(),r.fireChange()},start:function(e,t){t.placeholder.height(t.item.height())}})},addRecursiveItem:function(i,e){var l=this.addItem(i,{value:e.value});e.items&&e.items.length&&C.each(e.items,function(e,t){x.addRecursiveItem(i.find("#"+l).find("ul").first(),t)})},addItem:function(e,t,i,l){x.itemId++,(t=t||{value:""}).id="contentblocks-list-item"+x.itemId,l=l||0===l?l:"last";var n=tmpl("contentblocks-field-list-item",t);"last"===l?e.append(n):e.children("li").eq(l).after(n);var s=e.find("#"+t.id),I=s.find("input");return I.on("keydown",function(e){var t=e.which||e.keyCode,i=C(this),l=i.closest("li"),n=i.val();if(13==t)e.preventDefault(),x.addItem(i.closest("ul"),{},!0,l.index());else if(8==t){if(""==n&&(e.preventDefault(),1<x.rootList.find("li").length)){var s=jQuery.Event("keydown",{which:38});I.trigger(s),i.closest("li").remove()}}else if(9==t){e.preventDefault();var o=null,r=!1;if(e.shiftKey){var c=(o=i.closest("ul").closest("li")).closest(".contentblocks-field-list-outer");o&&0<c.length&&(l.nextAll().appendTo(l.find("ul").first()),l.insertAfter(o),r=!0)}else{var f=l.prev().find("ul").first();f.length&&(l.appendTo(f),r=!0)}if(r){var d=l.find("input");d.hasClass("tinyrte-replaced")&&(d.show(),d.siblings(".tinyrte-container").hide()),d.focus()}}else if(38==t){var u=null,a=l.prev();if(a.length){var h=a.find("li").last();u=h.length?h:a}else{var v=l.closest("ul").closest("li"),p=v.closest(".contentblocks-field-list-outer").length;v.length&&p&&(u=v)}u&&u.find("input").first().focus()}else if(40==t){var m=null,g=l.find("li").first(),k=l.next();if(g.length)m=g;else if(k.length)m=k;else{var b=l.closest("ul").closest("li").next(),y=b.closest(".contentblocks-field-list-outer").length;b.length&&y&&(m=b)}m&&m.find("input").first().focus()}}),s.find(".contentblocks-field-list-add").on("click",function(){var e=C(this).closest("li").find(".contentblocks-field-list-nested"),t=e.find("ul > li"),i=C(this);0<t.length?(t.remove(),i.text("»")):(x.addItem(e.find("ul"),{},!0),i.text("«")),r.fireChange()}),s.find(".contentblocks-field-list-delete").on("click",function(){C(this).closest("li").remove(),r.fireChange(),r.fixColumnHeights()}),i&&I.focus(),r.fixColumnHeights(),r.toBoolean(o.properties.use_tinyrte)&&r.addTinyRte(I),t.id},getData:function(){var e=t.find(".contentblocks-field-list-outer"),l=[];return e.children("li").each(function(e,t){var i=C(t);l.push({value:i.find("input").first().val(),items:x.getNested(i)})}),{items:l}},getNested:function(e){var l=[];return e.find("ul").first().children("li").each(function(e,t){var i=C(t);l.push({value:i.find("input").first().val(),items:x.getNested(i)})}),l}};return x},r.fieldTypes.ordered_list=function(e,t){return r.fieldTypes.list(e,t)}}(vcJquery,ContentBlocks);
//# sourceMappingURL=list-min.js.map