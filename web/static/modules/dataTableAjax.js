define("dataTablesAjax", function(require, exports, module) {
    "use strict";
    // datatables 有待优化
    require('/static/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js');
    var setting = {
        selector: '',
        ajaxUrl: '',
        element: '',
        dataPicker: '.date-picker',
        source: ''
    };

    var grid = new Datatable();
    var tableAjax = function() {};
    var responseDataNums = 0; //返回数据总行数

    tableAjax.prototype.init = function(selector) {

        setting.selector = selector;
        setting.element = $(selector);
        var data = setting.element.data();
        setting.ajaxUrl = data.ajaxUrl;
        setting.source = 'Data/' + data.source;
        setting.element.attr('id', 'dataTable' + (new Date()).getTime());
        this.initPickers();
        this.handleRecords();
    };

    tableAjax.prototype.destroy = function(){
        grid.tableDestroy();
    }

    tableAjax.prototype.initPickers = function() {
        require(['datepicker'], function(dataPicker) {
            dataPicker.module.init(setting.dataPicker);
        });
    }

    tableAjax.prototype.handleRecords = function() {

        require([setting.source], function(columns){
            
            columns.init(setting.element.data());
            grid.init({
                paging: false,
                src: setting.element,
                onSuccess: function(grid) { 

                    setTimeout(function(){
                        //时序问题，缺少dom填充完成回调函数，暂时先延时1秒
                        require(['core'], function(Core){
                            Core.init();
                        });
                    }, 1000);
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
                    initComplete: function(nRow, aData, iDataIndex){//detail http://www.cnblogs.com/amoniyibeizi/p/4548111.html
                        
                        
                    },
                    pageLength: 10, // default record count per page
                    ajax: {
                        url: setting.ajaxUrl, // ajax source
                        beforeSend: function(request){
                             //request.setRequestHeader('Ajax-Type', 'pjax');
                        },
                        data: function(requestData) {
                            var formData = setting.element.parents('form.data-table').serializeArray();
                            formData.push({name: 'length', value: requestData.length});
                            formData.push({name: 'start', value: requestData.start});
                            formData.push({name: 'draw', value: requestData.draw});
                            formData.push({name: 'orderColumn', value: requestData.columns[requestData.order[0].column].data});
                            formData.push({name: 'orderType', value: requestData.order[0].dir});
                            
                            return formData;
                        },
                        dataFilter: function(responseData) {
                            //返回后的数据
                            return responseData;
                        }
                    },
                    columns: columns.columns,//require('Data/test'),
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
