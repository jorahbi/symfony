define(function() {
    var setting;
    return {
        init: function(params){
            setting = params;
        },
        columns: [{
            data: 'id',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<input type="checkbox" class="group-checkable" name="id[]" value="' + data + '">';
            }
        },
        { 
            data: 'label',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a class="btn default" data-target="ajax-modal111" data-toggle="modal" data-modules="modals" data-source="' + setting.modalDel + '"> ' + data + ' </a>';
            }
        },
        { data: 'icon', bSortable: false },//bSortable: false不排序
        { 
            data: 'status',
            bSortable: false,
            render: function(data, type, row, meta){
                return data ? '是' : '否';
            }
        }, 
        { data: 'link', bSortable: false },
        {
            data: 'isMenu',
            bSortable: false,
            render: function(data, type, row, meta){
                return data ? '是' : '否';
            }

        }, {
            data: 'id',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a class="btn btn-xs default green" href="' + setting.ajaxUrl + '/' + data + '"><i class="fa fa-eye"></i> 查看子类</a>\
                        <a class="btn btn-xs default green" data-target="ajax-modal" data-toggle="modal" data-modules="modals" data-source="' + setting.modalSave + '/' + data + '/add"><i class="fa fa-plus"></i> 添加子类</a>\
                        <a class="btn btn-xs default yellow" data-target="ajax-modal" data-toggle="modal" data-modules="modals" data-source="' + setting.modalSave + '/' + data + '/edit"><i class="fa fa-edit"></i> 编辑</a>\
                        <a class="btn btn-xs default red"><i class="fa fa-trash-o"></i> 删除</a>\
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
