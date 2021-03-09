<?php
namespace Mvc\Controllers\Be;
use Controller;

class NewsController extends Controller
{
    protected $news_model;
    protected $news_type_model;

    function __construct()
    {
        parent::__construct();
        $this->news_model = $this->model('NewsModel');
        $this->news_type_model = $this->model('NewsTypeModel');
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
            '/public/js/process-news.js',
            
        ];

        $list = $this->news_model->get_list();
        $types = $this->news_type_model->get_list_publish();
        // pre($types);
        $this->view('master', [
            'page' => 'news',
            'title_page' => 'News List',
            'list' => $list,
            'types' => $types,
            'css' => $css,
            'js' => $js,
        ]);
    }


    public function list()
    {
        $list = $this->news_model->get_list();
        echo json_encode($list);
    }

    public function store()
    {
        $request = $_POST;
        // pre($request);
        
        $news =  $this->news_model->store($request);
        echo json_encode($news);
    }

    public function update()
    {
        $request = $_POST;
        // pre($request['description']);   
        $data = [
            'title' => $request['title'],
            'description' => htmlspecialchars($request['description']),
            'content' => htmlspecialchars($request['content']),
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
        $news = $this->news_model->update(
            $data,
            [
                // 'id' => $request['id']
                'id' => 5
            ]
        );

        echo json_encode($news);
    }

    public function updatePublish()
    {
        $request = $_POST;
        // pre($request['value']);
        $publish = $this->news_model->update(
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
        $publish = $this->news_model->update(
            [
                'highlight' => $request['value']
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
        $news = $this->news_model->destroy($id);

        echo json_encode($news);
    }
}

