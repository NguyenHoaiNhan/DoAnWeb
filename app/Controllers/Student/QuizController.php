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

    public function checkResultOfQuestion($QuizID, $QuestionID, $Opt)
    {
        $model = new Quiz_model();
        $QuizResult = $model->checkResult($QuizID);

        $ScoreCount = 0;

        for($i = 0; $i < count($QuizResult); $i++)
        {
            if($QuestionID == $QuizResult[$i]['id'])
            {
               if($Opt == $QuizResult[$i]['answer'])
               {
                    $ScoreCount += 1;
                    break;
               }
            }
        }

        return $ScoreCount;
    }

    public function checkResult()
    {
        $quizID = $_POST['quizID'];
        $submittedAnswer = $_POST['answerList'];

        $totalScore = 0;
        
        foreach($submittedAnswer as $row)
        {
            $totalScore += $this->checkResultOfQuestion($quizID, $row['id'], $row['opt']);
        }

        return json_encode($totalScore);
    }

    public function showResult()
    {
        $QuestionID = $_GET['id'];
        $model = new Quiz_model();
        $data['masterData'] = $model->getResultByQuizID($QuestionID);
        return view('Student/Quiz/ShowResult', $data);
    }
}   
