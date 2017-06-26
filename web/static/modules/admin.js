/**
 * 后台js统一入口
 *
 */

define("admin", function(require, exports, module) {
	"use strict";
	Metronic.init(); 
    Layout.init(); 
    $(document.body).on("click", 'a:not(a[target="_blank"],a[href^="javascript:"],a[data-toggle],a[data-target],a[data-event],a[href="#"])', function(e) {
    	alert('s')
	var _self = $(this);
	e.stopPropagation();
	e.preventDefault();
	$.ajax({
		url: _self.attr('href'),
		beforeSend: function(){
			$('.page-sidebar-menu').find('li').removeClass('active open');
			_self.parent().addClass('active').parents().addClass('active open');
		},
		success: function(data){
			$(document.body).find('.page-content-wrapper .page-content').html($(data).find('.page-content-wrapper .page-content').html());
			require(['core'], function(Core){
				for (var key in requireConfig.paths) {
					if (document.querySelector('[data-modules="' + key + '"]')) {
						Core.Core.reset(key);
					}
				}
				
			})
		},
		error: function(){

		},
		complete: function(){

		}
	});

});
});

/*
$(document.body).on("click", 'a:not(a[target="_blank"],a[href^="javascript:"],a[data-toggle],a[data-target],a[data-event],a[href="#"])', function(e) {
    var d = $(this),
        a = d.prop("href"),
        b = d.attr("href");
    if (b) {
        e.stopPropagation();
        var c = $(".content-wrapper");
        if (0 !== b.indexOf("http:")) {
            e = b.split("/");
            d = (new Date).getTime();
            a = $(this).parents(".sidebar-menu");
            if (b = $(this).parent("li")) $(a).find("li li").removeClass("active"), $(b).addClass("active"), $(b).siblings().removeClass("active");
            a = "tpl/" + e.join(".") + ".html?t=" +
                d;
            $.ajax({ url: a, beforeSend: function(f) { $(c).prepend('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>') }, success: function(f) { $(c).html(f) }, complete: function(f, a) { $(c).find(".overlay").remove() }, error: function(a) {
                    var b = $('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">\u00d7</button><h4><i class="icon fa fa-ban"></i></h4></div>');
                    $(b).find("h4").text(a.status);
                    $(b).find("h4").after(a.responseText);
                    $(c).html($(b)) } });
            return !1
        }
        if ($(this).attr("data-confirm") && !confirm($(this).attr("data-confirm"))) return !1;
        if ("_command" == d.prop("target")) return $.ajax({ url: a, success: function(a) {}, error: function(a) {} }), !1;
        c.length ? load_page(a, c) : load_page(a);
        return !1
    }
});*/
