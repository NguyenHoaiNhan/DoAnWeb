<?php
namespace App\Controllers;

class QuizController extends BaseController
{
    public function index()
    {
        return view('Quiz/Quiz');
    }

}
