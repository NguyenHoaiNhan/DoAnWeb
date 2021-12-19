<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class QuizController extends BaseController
{
    public function startQuiz()
    {
        $QuizID = $_GET['id'];
        $model = new Quiz_model();
        $data['masterData'] = $model->startQuiz($QuizID);
        return view('Student/Quiz/StartQuiz', $data);
    }

    public function bookmarkQuiz()
    {
        
    }

}
