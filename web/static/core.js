define("core", function(require, exports, module) {
    var Core = function() {};
    var modules = {
        Core: (new Core())
    };

    var moduleNum = 0; //要加载的模块总数
    var moduleIndex = 0; //当前加载的模块
    Core.prototype.init = function() {
        for (var key in requireConfig.paths) {
            var selector = '[data-modules="' + key + '"]';
            if (document.querySelector('[data-modules="' + key + '"]')) {
                moduleNum ++;
                require([key], function(module) {
                    var selector = '[data-modules="' + module.name + '"]';
                    module.module.init(selector);
                    modules[module.name] = module.module;
                    moduleIndex ++;
                });
            }
        }
    };
    
    Core.prototype.reset = function(moduleName){
        var selector = '[data-modules="' + moduleName + '"]';
        require([moduleName], function(module){
            module.module.init(selector);
            modules[module.name] = module.module;
        });
        return;
    };
    
    //获取require模块
    Core.prototype.getModule = function(callback){
        //加载时序问题，模块全部加载完成后结束调用
       var timer = setInterval(function(){
            if(moduleIndex == moduleNum){
                callback.call(undefined, modules);
                clearInterval(timer);
            }
        }, 100);
    }

    modules.Core.init();
    return modules.Core;
});
