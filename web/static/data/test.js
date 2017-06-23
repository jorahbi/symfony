define(function() {
    return [{
            data: 'id',
            render: function(data, type, row, meta) {
                return '<input type="checkbox" name="id[]" value="' + data + '">';
            }
        },
        { data: 'borrowName', bSortable: false},//bSortable: false不排序
        { data: 'borrowOrder' },
        { data: 'classify' },
        { data: 'interest' }, {
            data: 'money',
            searchable: false,
            render: function(data, type, row, meta) {
                /*console.log(data);
                console.log(type);
                console.log(row);
                console.log(meta);*/
                return '<a>test</a>'
            }
        },
        { data: 'package' }, {
            render: function(data, type, row, meta) {
                return '<span class="label label-sm label-success">Pending</span>';
            }
        }, {
            data: 'upperPrice',
            render: function(data, type, row, meta) {
                return '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
            }
        }
    ];
});
