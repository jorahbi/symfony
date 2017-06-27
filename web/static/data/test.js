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
            data: 'realName',
            render: function(data, type, row, meta) {
                return '<a class="btn default" id="ajax-demo" data-modal="ajax-modal" data-toggle="modal" data-modules="modals" data-source="' + setting.modalUrl + '"> ' + data + ' </a>';
            }
        },
        { data: 'borrowName', bSortable: false},//bSortable: false不排序
        { data: 'money' },
        { data: 'investMoney' },
        { data: 'repaymentType' }, {
            data: 'duration',
            searchable: false,
            render: function(data, type, row, meta) {
                /*console.log(data);
                console.log(type);
                console.log(row);
                console.log(meta);*/
                return '<a>test</a>'
            }
        },
        { data: 'addTime' }, {
            data: 'id',
            bSortable: false,
            render: function(data, type, row, meta) {
                return '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
                
            }
        }/*, {
            data: 'upperPrice',
            render: function(data, type, row, meta) {
                return '<span class="label label-sm label-success">Pending</span>';
            }
        }*/
    ]};
});
