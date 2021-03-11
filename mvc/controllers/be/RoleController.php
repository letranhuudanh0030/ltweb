<?php
namespace Mvc\Controllers\Be;
use Controller;

class RoleController extends Controller
{
    protected $role_model;

    function __construct()
    {
        parent::__construct();
        $this->role_model = $this->model('RoleModel');
    }

    public function index()
    {
        $css = [
            '/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
            '/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
            '/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
            '/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        ];

        $js = [
            '/public/plugins/datatables/jquery.dataTables.min.js',
            '/public/plugins/jquery-validation/jquery.validate.min.js',
            '/public/plugins/jquery-validation/additional-methods.min.js',
            '/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
            '/public/plugins/datatables-responsive/js/dataTables.responsive.min.js',
            '/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
            '/public/plugins/datatables-buttons/js/dataTables.buttons.min.js',
            '/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
            '/public/plugins/jszip/jszip.min.js',
            '/public/plugins/pdfmake/pdfmake.min.js',
            '/public/plugins/pdfmake/vfs_fonts.js',
            '/public/plugins/datatables-buttons/js/buttons.html5.min.js',
            '/public/plugins/datatables-buttons/js/buttons.print.min.js',
            '/public/plugins/datatables-buttons/js/buttons.colVis.min.js',
            '/public/js/script.js',
            '/public/js/process-role.js',
        ];

        $list = $this->role_model->get_list();
        
        $this->view('master', [
            'page' => 'role',
            'title_page' => 'Role List',
            'list' => $list,
            'css' => $css,
            'js' => $js,
        ]);
    }    

    public function list()
    {
        $list = $this->role_model->get_list();
        // pre($list);
        echo json_encode($list);
    }

    public function store()
    {
        $request = $_POST;
        // pre($request);
        
        $role = $this->role_model->store($request);

        $_SESSION['notice'] = "Thêm thành công";

        echo json_encode($role);
    }

    public function update()
    {
        $request = $_POST;
        $role = $this->role_model->update(
            [
                'name' => $request['name'],
                'role' => $request['role'],
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($role);
    }

    public function updatePublish()
    {
        $request = $_POST;
        // pre($request['value']);
        $publish = $this->role_model->update(
            [
                'publish' => $request['value']
            ], 
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($publish);
    }

    public function delete()
    {
        $id = $_POST['id'];
        // pre($id);
        $role = $this->role_model->destroy($id);

        echo json_encode($role);
    }
}
