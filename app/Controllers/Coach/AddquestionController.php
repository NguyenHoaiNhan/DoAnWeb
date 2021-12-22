<?php
namespace App\Controllers\Coach;

use App\Controllers\BaseController;
use App\Models\Question_model;
use App\Models\Quiz_model;

class AddquestionController extends BaseController
{

    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Thêm câu hỏi', 'add-question', 'add-question', 1);
        return view('Coach/main', $PageInfo);
    }

    public function edit()
    {
        $PageInfo = $this->loadMasterLayout('Sửa câu hỏi', 'edit-question', 'edit-question', 1);
        return view('Coach/main', $PageInfo);
    }

    public function addQuestion()
    {
        if (isset($_POST['question'])) {
            $question = $_POST['question'];
            $filter = $_POST['filter'];
            $opta = $_POST['opta'];
            $optb = $_POST['optb'];
            $optc = $_POST['optc'];
            $optd = $_POST['optd'];
            $answer = $_POST['answer'];
            $uid = $_POST['uid'];
        }
        $model = new Quiz_model();
        $model->addQuiz($question, $filter, $opta, $optb, $optc, $optd, $answer, $uid);
    }

    public function editQuestion()
    {
        $QuizID = $_GET['id'];
        $model = new Question_model();
        $data['question'] = $model->getQuestion($QuizID);
        return view('welcome_message', $data);
    }
}
