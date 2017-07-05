define('modals', function(require) {

    var setting = {
        id: '',
        data: '', //[modal:弹层填充位置, source: ajax请求路径]
        element: '',
        modalHtml: '<div id="ajax-modal"  class="modal fade" tabindex="-1"></div>',
        pageContainer: $('.page-content-wrapper .page-content')
    };
    var modals = {}; //
    var callback = null;
    var Modal = function() {};


    Modal.prototype.init = function(selector) {
        setting.element = $(selector);

        setting.data = setting.element.data();
        $.fn.modalmanager.defaults.resize = true;
        var modalLock = {}; //modal lock

        var modalHtml = '';
        $.fn.modal.defaults.spinner = $.fn.modalmanager.defaults.spinner =
            '<div class="loading-spinner" style="width: 200px; margin-left: -100px;">' +
            '<div class="progress progress-striped active">' +
            '<div class="progress-bar" style="width: 100%;"></div>' +
            '</div>' +
            '</div>';
        var _self = this;

        //不同的id添加不同的modal html
        setting.element.each(function(idx, item) {
            var modalId = $(item).attr('data-target');
            if (modalLock[modalId] == true)
                return true;

            modalHtml = '<div id="' + modalId + '"  class="modal fade bs-modal-lg" role="dialog"  tabindex="-1"></div>';

            if (modalLock[modalId] == undefined) {
                setting.pageContainer.find('#' + modalId).remove();
                setting.element.off().on('hidden', 'click.bs.modal.data-api');
                setting.pageContainer.append(modalHtml);
                modalLock[modalId] = true;
                modals[modalId] = $('#' + modalId);
                //调用各自所属的modal
                _self._modalInit(modalId);
            }
        });
    };

    Modal.prototype._modalInit = function(modalId) {
        setting.element.on('click.bs.modal.data-api', function() {
            var _self = $(this);
            var modalTarget = _self.attr('data-target');
            // create the backdrop and wait for next modal to be triggered
            $('body').modalmanager('loading');

            modals[modalTarget].load(_self.attr('data-source'), '', function(responseText, status, data) {
                modals[modalTarget].modal();
                require(['core'], function(Core) {
                    Core.init();
                });
                // (当前modal jquery对象, modal Id)
                callback.call(undefined, modals[modalTarget], modalTarget);
            });
        });

        modals[modalId].on('click.bs.modal.data-api', '.update', function() {
            modals[modalId].modal('loading');
            setTimeout(function() {
                modals[modalId]
                    .modal('loading')
                    .find('.modal-body')
                    .prepend('<div class="alert alert-info fade in">' +
                        'Updated!<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '</div>');
            }, 1000);
        });
    };

    Modal.prototype.callback = function(handle) {
        callback = typeof handle == 'function' ? handle : function() {};
    }

    return {
        name: 'modals',
        module: (new Modal())
    };
});
