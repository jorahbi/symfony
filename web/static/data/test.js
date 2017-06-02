define(function() {
    return [{
            data: 'test1',
            render: function(data, type, row, meta) {
                return '<input type="checkbox" name="id[]" value="' + data + '">';
            }
        },
        { data: 'test2' },
        { data: 'test3' },
        { data: 'test4' },
        { data: 'test5' }, {
            data: 'test6',
            searchable: false,
            render: function(data, type, row, meta) {
                /*console.log(data);
                console.log(type);
                console.log(row);
                console.log(meta);*/
                return '<a>test</a>'
            }
        },
        { data: 'test7' }, {
            render: function(data, type, row, meta) {
                return '<span class="label label-sm label-success">Pending</span>';
            }
        }, {
            data: 'test8',
            render: function(data, type, row, meta) {
                return '<a href="javascript:;" class="btn btn-xs default"><i class="fa fa-search"></i> View</a>';
            }
        }
    ];
});
