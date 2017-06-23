define("dataTablesAjax", function(require, exports, module) {
    "use strict";
    require('/static/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js');
    var setting = {
        selector: '',
        ajaxUrl: '',
        element: '',
        dataPicker: '.date-picker',
        source: ''
    };
    var tableAjax = function() {};

    tableAjax.prototype.init = function(selector) {
        setting.selector = selector;
        setting.element = $(selector);
        var data = setting.element.data();
        setting.ajaxUrl = data.ajaxUrl;
        setting.source = 'Data/' + data.source;
        this.initPickers();
        this.handleRecords();
    };


    tableAjax.prototype.initPickers = function() {
        require(['datepicker'], function(dataPicker) {
            dataPicker.module.init(setting.dataPicker);
        });
    }

    tableAjax.prototype.handleRecords = function() {

        require([setting.source], function(columns){
            var grid = new Datatable();
            grid.init({
                src: setting.element,
                onSuccess: function(grid) {
                    grid.clearAjaxParams();
                },
                onError: function(grid) {},
                onDataLoad: function(grid) {},
                loadingMessage: 'Loading...',
                dataTable: {
                    //"pagingType":   "full_numbers",
                    bStateSave: true, // save datatable state(pagination, sort, etc) in cookie.
                    searchable: true,
                    serverSide: true,
                    lengthMenu: [
                        [10, 20, 50, 100, 150, -1],
                        [10, 20, 50, 100, 150, "All"] // change per page values here
                    ],
                    pageLength: 10, // default record count per page
                    ajax: {
                        url: setting.ajaxUrl, // ajax source
                        data: function(requestData) {
                            var result = {
                                length: requestData.length,
                                start: requestData.start,
                                draw: requestData.draw,
                                orderColumn: requestData.columns[requestData.order[0].column].data,
                                orderType: requestData.order[0].dir
                            };
                            setting.element.find('input[type="text"], input[type="hidden"], select').each(function(idx, item) {
                                result[$(item).attr('name')] = $(item).val();
                            });
                            return result;
                        },
                        dataFilter: function(responseData) {
                            //返回后的数据
                            return responseData;
                        }
                    },
                    columns: columns,//require('Data/test'),
                    order: [
                        [1, "asc"]
                    ], // set first column as a default sort by asc
                    language: {
                        'emptyTable': '没有数据',
                        'loadingRecords': '加载中...',
                        'processing': '查询中...',
                        'search': '检索:',
                        'lengthMenu': '每页 _MENU_ 件',
                        'zeroRecords': '没有数据',
                        'paginate': {
                            'first': '第一页',
                            'last': '最后一页',
                            'next': '',
                            'previous': ''
                        },
                        'info': '第 _PAGE_ 页 / 总 _PAGES_ 页',
                        'infoEmpty': '没有数据',
                        'infoFiltered': '(过滤总件数 _MAX_ 条)'
                    }
                }
            });

            // handle group actionsubmit button click
            grid.getTableWrapper().on('click', '.table-group-action-submit', function(e) {
                e.preventDefault();
                var action = $(".table-group-action-input", grid.getTableWrapper());
                if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                    grid.setAjaxParam("customActionType", "group_action");
                    grid.setAjaxParam("customActionName", action.val());
                    grid.setAjaxParam("id", grid.getSelectedRows());
                    grid.getDataTable().ajax.reload();
                    grid.clearAjaxParams();
                } else if (action.val() == "") {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'Please select an action',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                } else if (grid.getSelectedRowsCount() === 0) {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'No record selected',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                }
            });
        })
    }
    return { name: 'dataTablesAjax', module: (new tableAjax()) };
});
