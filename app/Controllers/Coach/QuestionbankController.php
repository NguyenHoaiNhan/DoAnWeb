<?php

namespace App\Controllers\Coach;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class QuestionbankController extends BaseController
{
    // public function showInfo()
    // {
    //     $model = new Scroll_pagination_model();
    //     $data['userlist'] = $model->getData();
    //     return view('emp', $data);
    // }

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Ngân hàng câu hỏi', 'question_bank', 'question_bank', 1);
        return view('Coach/main', $PageInfo);
    }

    public function fetch_c()
    {
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit'];
            $start = $_POST['start'];

            $model = new Quiz_model();
            $data = $model->fetch_question($limit, $start);

            echo json_encode($data);
        }
    }
    public function fetch_s()
    {
        if (isset($_POST['search'])) {
            $search = $_POST['search'];


            $model = new Quiz_model();
            $data = $model->fetch_search($search);

            echo json_encode($data);
        }
    }
    public function fetch_d()
    {
        $model = new Quiz_model();
        $data = $model->fetch_question_1();

        echo json_encode($data);
    }

    public function fetch_t()
    {

        $model = new Quiz_model();
        $data = $model->fetch_tag();

        echo json_encode($data);
    }
}
