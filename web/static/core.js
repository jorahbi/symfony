define("core", function(require, exports, module) {
    var Setting = function() {};
    var modules = {
        Core: (new Setting())
    };

    Setting.prototype.init = function() {
        for (var key in requireConfig.paths) {
            var selector = '[data-modules="' + key + '"]';
            if (document.querySelector('[data-modules="' + key + '"]')) {
                require([key], function(module) {
                    if(module){
                        var selector = '[data-modules="' + module.name + '"]';
                        module.module.init(selector);
                        modules[module.name] = module.module;
                    }
                });
            }
        }

    };
    
    Setting.prototype.reset = function(moduleName){
        var selector = '[data-modules="' + moduleName + '"]';
        if(!modules[moduleName]){
            require([moduleName], function(module){
                module.module.init(selector);
                modules[module.name] = module.module;
            });
            return;
        }
        modules[moduleName].init(selector);
    };
    
    modules.Core.init();
    return modules;
});
