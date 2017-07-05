/**
 * 
 *
 */

define("tools", function(require, exports, module) {

	var Tools = function(){};

	/**
	 * ajax调用
	 */
	Tools.prototype.ajax = function(options){

		var Ajax = function(options){
			options = options || {};
			this._setting = $.extend({
				url: '',
				type: 'post',
				dataType: 'json',
				data: {},
				async: true,
				beforeSendCallback: function(request){},
				successCallback: function(data, textStatus){},
				errorCallback: function(request, textStatus, errorThrown){},
				completeCallback: function(request, textStatus){},
			}, options);
		};
		
		Ajax.prototype._setting = {};

		Ajax.prototype.ajaxInit = function(){
			var _self = this;
			$.ajax({
				url: _self._setting.url,
				type: _self._setting.type,
				dataType: _self._setting.dataType,
				data: _self._setting.data,
				async: _self._setting.async,
				beforeSend: function(request){
					_self._setting.beforeSendCallback(request);
				},
				success: function(data, textStatus){
					_self._setting.successCallback(data, textStatus);
				},
				error: function(request, textStatus, errorThrown){
					_self._setting.errorCallback(request, textStatus, errorThrown);
				},
				complete: function(request, textStatus){
					_self._setting.completeCallback(request, textStatus);
				}
			});
		};
		var ajax = new Ajax(options);
		ajax.ajaxInit();
		return ajax;
	};

	/**
	 * h5 缓存
	 */
	Tools.prototype.storage = function(){}

	return new Tools();
});