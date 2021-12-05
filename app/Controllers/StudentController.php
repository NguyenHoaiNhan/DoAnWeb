<?php
namespace App\Controllers;

use App\Models\Quiz_model;

class StudentController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        return view('Student/Home');
    }

    public function home()
    {
        return View('Student/Home');
    }

    public function bookmark()
    {
        return View('Student/Bookmark');
    }

    // Lấy dữ liệu cho phần infinitive scroll pagination của Home.php
    public function fetch()
    {
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit'];
            $start = $_POST['start'];

            $model = new Quiz_model();
            $data = $model->fetch_data($limit, $start);
            
            echo json_encode($data);
        }
    }
}
