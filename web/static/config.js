
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
        modals: 'modules/modals',
        datatables: 'plugins/datatables/media/js/jquery.dataTables.min',
        datepicker: 'modules/datepicker',
        dropdowns: 'modules/dropdowns',
        icheck: 'modules/icheck'
    },
    shim:{
        admin: {
            deps: [
                'css!plugins/font-awesome/css/font-awesome.min.css',
                'css!plugins/simple-line-icons/simple-line-icons.min.css',
                'css!modules/admin/admin5css/components-rounded.css',
                'css!modules/admin/admin5css/plugins.css',
                'css!modules/admin/layout/css/layout.css',
                'css!modules/admin/layout/css/themes/default.css',
                //'modules/admin/scripts/metronic',
                //'modules/admin/layout4/scripts/layout'
            ]
        },
        modals: {
            deps: [
                'css!plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
                'css!plugins/bootstrap-modal/css/bootstrap-modal.css',
                'plugins/bootstrap-modal/js/bootstrap-modalmanager',
                'plugins/bootstrap-modal/js/bootstrap-modal',
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
        },
        dropdowns: {
            deps: [
                'css!plugins/select2/select2.css',
                'css!global/plugins.css',
                'css!global/components.css',
                'plugins/select2/select2.min'
            ]
        },
        icheck: {
            deps: [
                'css!global/plugins.css',
                'css!plugins/icheck/skins/minimal/_all.css',
                'plugins/icheck/icheck.min'
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


