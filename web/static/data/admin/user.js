define(function() {
    var setting;
    return {
        init: function(params){
            setting = params;
        },
        columns: [{
            data: 'id',
            render: function(data, type, row, meta) {
                return '<input type="checkbox" class="group-checkable" name="id[]" value="' + data + '">';
            }
        },
        { 
            data: 'label',
            render: function(data, type, row, meta) {
                return '<a class="btn default" id="ajax-demo" data-modal="ajax-modal" data-toggle="modal" data-modules="modals" data-source="' + setting.modalUrl + '"> ' + data + ' </a>';
            }
        },
        { data: 'icon' },//bSortable: false不排序
        { 
            data: 'status',
            render: function(data, type, row, meta){
                return data ? '是' : '否';
            }
        }, 
        { data: 'link' },
        { 
            data: 'isMenu',
            render: function(data, type, row, meta){
                return data ? '是' : '否';
            }

        }, {
            data: 'id',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a href="javascript:;" class="btn btn-xs default green"><i class="fa fa-eye"></i> 查看</a>\
                        <a href="javascript:;" class="btn btn-xs default green"><i class="fa fa-plus"></i> 添加</a>\
                        <a href="javascript:;" class="btn btn-xs default yellow"><i class="fa fa-edit"></i> 编辑</a>\
                        <a href="javascript:;" class="btn btn-xs default red"><i class="fa fa-trash-o"></i> 删除</a>\
                ';
                
            }
        }/*, {
            data: 'upperPrice',
            render: function(data, type, row, meta) {
                return '<span class="label label-sm label-success">Pending</span>';
            }
        }*/
    ]};
});
