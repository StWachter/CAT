!function(n,r){r.fieldTypes.code=function(t,i){var o={editor:null};return ace.config.set("basePath",ContentBlocksConfig.assets_url+"js/vendor/9cloud/ace"),o.init=function(){this.editor=ace.edit(i.generated_id+"-editor"),this.editor.setTheme("ace/theme/"+ContentBlocksConfig["code.theme"]),this.editor.setValue(i.value||"",1),this.editor.setOptions({minLines:1,maxLines:1/0,wrap:"free",showPrintMargin:!1}),this.editor.on("input",function(){r.fireChange()});var a=t.find(".language"),e=i.properties.available_languages||"html=HTML,javascript=JavaScript,css=CSS,php=PHP";e=e.split(","),n.each(e,function(e,t){t=t.split("=");var n=_("contentblocks."+t[1])||t[1];a.append('<option value="'+t[0]+'">'+n+"</option>")}),e.length<2&&a.parent().hide(),i.lang||(i.lang=i.properties.default_language||"html"),a.val(i.lang),this.editor.getSession().setMode("ace/mode/"+i.lang),a.on("change",function(){o.editor.getSession().setMode("ace/mode/"+n(this).val()),r.fireChange()})},o.getData=function(){return{value:this.editor.getValue(),lang:t.find(".language").val()}},o.confirmBeforeDelete=function(){var e=o.getData(),t=e.lang!=i.properties.default_language,n=0<e.value.length;return t||n},o}}(vcJquery,ContentBlocks);
//# sourceMappingURL=code-min.js.map