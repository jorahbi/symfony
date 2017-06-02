
define("datepicker", function(require, exports, module) {
    "use strict";
    var datepicker = function(){};

    var settings = {
    	rtl: Metronic.isRTL(),
        autoclose: true,
        element: ''
    };
    datepicker.prototype.init = function(selector){
    	settings.element = $(selector);
    	if(!settings.element) return;
    	settings.element.datepicker(settings);
    };

    return { name: 'datepicker', module: (new datepicker()) };
});