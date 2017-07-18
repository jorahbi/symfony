/**
 * 
 *
 */

define("admin", function(require, exports, module) {
	"use strict";
	Metronic.init(); 
    Layout.init(); 

    var PageLoader = function(){};

    PageLoader.prototype.init = function(){
        this.setting = {
            body: '',
            script: '',
            title: '',
        };
        $(document.body).append(
            '<div class="cssload-pgloading">\
                <div class="cssload-loadingwrap">\
                    <ul class="cssload-bokeh">\
                        <li></li>\
                        <li></li>\
                        <li></li>\
                        <li></li>\
                    </ul>\
                </div>\
            </div>');
        var _self = this;
        $(document.body).on("click", 'a:not(a[target="_blank"],a[href^="javascript:"],a[data-toggle],a[data-modules],a[data-target],a[data-event],a[href="#"])', function(e) {
            e.stopPropagation();
            e.preventDefault();
            _self.loader($(this));
                
        });
        _self.popstate();
    };

    PageLoader.prototype.loader = function(onLoader){
        var _self = this;
        var body =  $(document.body).find('.page-content-wrapper .page-content');
        setTimeout(function(){
            $.ajax({
                url: onLoader.attr('href'),
                beforeSend: function(request){
                    $('div.cssload-pgloading').fadeIn();
                    if(onLoader.parents('.page-sidebar-menu').length > 0){
                        $('.page-sidebar-menu').find('li').removeClass('active').removeClass('open');
                        onLoader.parent().addClass('active').parents().addClass('active open');
                    }
                    request.setRequestHeader('Ajax-Type', 'pjax');
                },
                success: function(data){
                    _self.setting.body = data;
                    _self.setting.script = _self.fetch(/<script[^>]*>([\s\S]*?)<\/script>/gi);
                    _self.setting.title = _self.fetch(/<title[^>]*>([\s\S]*?)<\/title>/gi);
                    document.title = _self.setting.title;
                    if(onLoader.attr('href') != window.location.pathname){
                        history.pushState({path: onLoader.attr('href'), title: _self.setting.title}, (new Date()).getTime(), onLoader.attr('href'));
                    }
                    
                    body.html($(data).find('.page-content-wrapper .page-content').html());

                    require(['core'], function(Core){
                        Core.init();
                        if(_self.setting.script != ''){
                            var script = document.createElement('script');
                            script.setAttribute('type', 'text/javascript');
                            script.text = _self.setting.script;
                            document.head.appendChild(script);
                            document.head.removeChild(script);
                        }
                    });
                },
                error: function(){

                },
                complete: function(){
                    $('div.cssload-pgloading').fadeOut();
                }
            }); 
        }, 300);
    };

    PageLoader.prototype.fetch = function(reg){
        var result = '';
        this.setting.body = this.setting.body.replace(reg, function(){
            result += arguments[1] + '\n';
            return '';
        });
        return result;
    }

    /**
     * 重新载入页面
     */
    PageLoader.prototype.reset = function(href){
        href = href || window.location.pathname;
        var location = $('ul.page-sidebar-menu').find('a[href="' + href + '"]:first').html() || '<a href="' + href + '"> </a>';
        this.loader($(location));
    }

    PageLoader.prototype.popstate = function(){
       /* var _self = this;
        $(window).on('popstate', function() {
            console.log(history.state)
            _self.loader($(document.body).find('.page-content-wrapper .page-content').find('a[href="' + history.state.path + '"]'));
        });*/
    }    
    
    var pageLoader = new PageLoader();
    pageLoader.init();
    return pageLoader;
});

