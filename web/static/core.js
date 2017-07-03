define("core", function(require, exports, module) {
    var Setting = function() {};
    var modules = {
        Core: (new Setting())
    };

    var rebindModules = {
        modals: true
    };

    var moduleLock = false;
    var moduleNum = 0;
    var test = 0;
    Setting.prototype.init = function() {
        for (var key in requireConfig.paths) {
            var selector = '[data-modules="' + key + '"]';
            if (document.querySelector('[data-modules="' + key + '"]')) {
                moduleNum ++;
                require([key], function(module) {
                    var selector = '[data-modules="' + module.name + '"]';
                    module.module.init(selector);
                    modules[module.name] = module.module;
                    test ++;
                    if(moduleNum == test) moduleLock = true;
                });
            }
        }
    };
    
    Setting.prototype.reset = function(moduleName){
        var selector = '[data-modules="' + moduleName + '"]';

        //modals 不需要重新绑定，否则会有重复弹层
        if(modules[moduleName] && rebindModules[moduleName] == false) return;
console.log(moduleName);
        require([moduleName], function(module){
            module.module.init(selector);
            modules[module.name] = module.module;
        });
        return;
    };
    
    Setting.prototype.rebind = function(moduleName, isBind){
        (moduleName) && (typeof isBind == 'boolean') && (rebindModules[moduleName] = isBind);
    }

    Setting.prototype.getModule = function(moduleName){
        
    }

    modules.Core.init();
    return modules;
});
