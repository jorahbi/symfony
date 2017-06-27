/**
 * 后台js统一入口
 *
 */

define("admin", function(require, exports, module) {
	"use strict";
	Metronic.init(); 
    Layout.init(); 
    $(document.body).on("click", 'a:not(a[target="_blank"],a[href^="javascript:"],a[data-toggle],a[data-target],a[data-event],a[href="#"])', function(e) {
    	var _self = $(this);
    	e.stopPropagation();
    	e.preventDefault();
        var body =  $(document.body).find('.page-content-wrapper .page-content');
        
        $.ajax({
            url: _self.attr('href'),
            beforeSend: function(){
                /*var loading = ' <div class="loading-spinner" style="width: 200px; margin-left: -100px;">\
                                    <div class="progress progress-striped active">\
                                        <div class="progress-bar" style="width: 100%;"></div>\
                                    </div>\
                                </div>';
                    body.append(loading);*/
                $('.page-sidebar-menu').find('li').removeClass('active open');
                _self.parent().addClass('active').parents().addClass('active open');
            },
            success: function(data){
                var title = $(data).find('title');
                history.pushState({}, document.title, _self.attr('href'));
                body.html($(data).find('.page-content-wrapper .page-content').html());
                
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

