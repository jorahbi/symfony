define("core", function(require, exports, module) {
    var Setting = function() {};
    var modules = {};
    var moduleName = [];
    Setting.prototype.init = function() {
        for (var key in requireConfig.paths) {
            var selector = '[data-modules="' + key + '"]';
            if (document.querySelector('[data-modules="' + key + '"]')) {
                require([key], function(module) {
                    var selector = '[data-modules="' + module.name + '"]';
                    module.module.init(selector);
                    modules[module.name] = module.module;
                });
            }
        }

    };

    (new Setting()).init();

    return modules;
});
