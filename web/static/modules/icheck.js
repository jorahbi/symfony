define('icheck', function(require, exports, module) {
    "use strict";
    var Icheck = function() {};

    Icheck.prototype.init = function(selector) {
        $(selector).iCheck();
    }
    return {
        name: 'icheck',
        module: (new Icheck())
    };
})