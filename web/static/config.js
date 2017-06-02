
var requireConfig = {
    baseUrl: "/static/",
    packages: [{
     name: 'Data',
     location: 'data',
     main: 'Data'
     }],
    paths: {
        admin: 'modules/admin',
        tables: 'modules/tables',
        vue: 'vue',
        core: 'core',
        dataTablesAjax: 'modules/dataTableAjax',
        datatables: 'plugins/datatables/media/js/jquery.dataTables.min',
        datepicker: 'modules/datepicker'
    },
    shim:{
        admin: {
            deps: [
                'css!plugins/font-awesome/css/font-awesome.min.css',
                'css!plugins/simple-line-icons/simple-line-icons.min.css',
                'css!modules/admin/admin5css/components-rounded.css',
                'css!modules/admin/admin5css/plugins.css',
                'css!modules/admin/layout4/css/layout.css',
                //'modules/admin/scripts/metronic',
                //'modules/admin/layout4/scripts/layout'
            ]
        },
        dataTablesAjax: {
            deps: [
                'css!plugins/datatables/media/css/jquery.dataTables.min.css',
                'css!plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css',
                'datatables',
                'datepicker',
                'modules/admin/scripts/datatable',
                //'modules/admin/pages/scripts/table-ajax'
             ]
        },
        // datatables: [
        //     'plugins/datatables/plugins/bootstrap/dataTables.bootstrap',
        // ],
        datepicker: {
            deps: [
                'plugins/bootstrap-datepicker/js/bootstrap-datepicker',
                'css!plugins/bootstrap-datepicker/css/datepicker.css',
            ]
        }
    },
    map: {
        '*': {
            'css': '/static/css.js'
        }
    },
    urlArgs: "t=" + (new Date()).getTime()
};

requirejs.config(requireConfig);


