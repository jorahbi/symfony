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
            data: 'title',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a class="btn default" data-target="ajax-modal111" data-toggle="modal" data-modules="modals" data-source="' + setting.modalDel + '"> ' + data + ' </a>';
            }
        },
        { 
            data: 'isEnable',
            bSortable: false,
            render: function(data, type, row, meta){
                return data ? '是' : '否';
            }
        }, 
        { 
            data: 'adminId',
            bSortable: false
        }, 
        {
            data: 'createtime',
            render: function(data, type, row, meta) {
                var date = new Date();
                date.setTime(data * 1000);
                return date.toLocaleString();
            }

        }, {
            data: 'id',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a class="btn btn-xs default yellow" href="' + setting.modalSave + '/' + data + '"><i class="fa fa-edit"></i> 编辑</a>\
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
