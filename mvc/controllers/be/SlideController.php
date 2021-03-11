<?php
namespace Mvc\Controllers\Be;
use Controller;

class SlideController extends Controller
{
    protected $slide_model;

    function __construct()
    {
        parent::__construct();
        $this->slide_model = $this->model('SlideModel');
    }

    public function index()
    {
        $css = [
            '/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css',
            '/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
            '/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
            '/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
            '/public/plugins/summernote/summernote-bs4.min.css'
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
            '/public/plugins/summernote/summernote-bs4.min.js',
            '/public/js/script.js',
            '/public/js/process-slide.js',
            
        ];

        $list = $this->slide_model->get_list();
        // pre($types);
        $this->view('master', [
            'page' => 'slide',
            'title_page' => 'Slide Show List',
            'list' => $list,
            'css' => $css,
            'js' => $js,
        ]);
    }

    public function list()
    {
        $list = $this->slide_model->get_list();
        echo json_encode($list);
    }

    public function store()
    {
        $request = $_POST;
        // pre($request);
        
        $slide = $this->slide_model->store($request);
        $_SESSION['notice'] = "Thêm thành công";
        echo json_encode($slide);
    }

    public function update()
    {
        $request = $_POST;
        // pre($request);
        $data = [
            'name' => $request['name'],
            'description' => $request['description'],
            'updated_at' => date("Y-m-d H:i:s")
        ];

        if(isset($request['image'])){
            $data['image'] = $request['image'];
        }

        $slide = $this->slide_model->update(
            $data,
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($slide);
    }

    public function updatePublish()
    {
        $request = $_POST;
        // pre($request['value']);
        $publish = $this->slide_model->update(
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
        $slide = $this->slide_model->destroy($id);

        echo json_encode($slide);
    }

    public function updateSortOrder()
    {
        $request = $_POST;

        $slide = $this->slide_model->update(
            [
                'sort_order' => $request['value']
            ],
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($slide);
    }
}
