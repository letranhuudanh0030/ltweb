<?php
namespace Mvc\Controllers\Be;

use Controller;

class ProductController extends Controller
{
    protected $product_model;

    function __construct()
    {
        parent::__construct();
        $this->product_model = $this->model('ProductModel');
        $this->product_type_model = $this->model('ProductTypeModel');
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
            '/public/js/process-product.js',
            
        ];

        $list = $this->product_model->get_list();
        $types = $this->product_type_model->get_list_publish();
        // pre($types);
        $this->view('master', [
            'page' => 'product',
            'title_page' => 'Product List',
            'list' => $list,
            'types' => $types,
            'css' => $css,
            'js' => $js,
        ]);
    }    

    public function list()
    {
        $list = $this->product_model->get_list();
        echo json_encode($list);
    }

    public function store()
    {
        $request = $_POST;
        // pre($request);
        
        $product =  $this->product_model->store($request);
        echo json_encode($product);
    }

    public function update()
    {
        $request = $_POST;

        $data = [
            'name' => $request['name'],
            'price' => $request['price'],
            'discount' => $request['discount'],
            'description' => $request['description'],
            'content' => $request['content'],
            'type_id' => $request['type_id'],
            'slug' => $request['slug'],
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'meta_keyword' => $request['meta_keyword'],
            'updated_at' => date("Y-m-d H:i:s")
        ];

        if(isset($request['image'])){
            $data['image'] = $request['image'];
        }
        
        // pre($data);
        $product = $this->product_model->update(
            $data,
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($product);
    }

    public function updatePublish()
    {
        $request = $_POST;
        // pre($request['value']);
        $publish = $this->product_model->update(
            [
                'publish' => $request['value']
            ], 
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($publish);
    }

    public function updateHighlight()
    {
        $request = $_POST;
        // pre($request['value']);
        $highlight = $this->product_model->update(
            [
                'highlight' => $request['value']
            ], 
            [
                'id' => $request['id']
            ]
        );

        echo json_encode($highlight);
    }

    public function delete()
    {
        $id = $_POST['id'];
        // pre($id);
        $product = $this->product_model->destroy($id);

        echo json_encode($product);
    }
}
