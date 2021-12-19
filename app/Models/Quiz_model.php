<?php

namespace App\Models;

use CodeIgniter\Model;

class Quiz_model extends Model
{
    public function fetch_data($limit, $start)
    {
        $query = $this->db->query("select id, description, title, total, time, participant from multiplechoice where status = 1 order by createDate desc limit $start, $limit");
        $data = $query->getResult('array');
        return $data;
    }

    public function startQuiz($QuizID)
    {
        $query = $this->db->query("
            select q.id QuestionID, q.question QuestionContent, q.a OptA, q.b OptB, q.c OptC, q.d OptD
            from multiplechoice m, belong b, question q 
            where m.id = b.mcid and b.qid = q.id and m.id = ".$QuizID 
        );
        $data = $query->getResult('array');
        return $data;
    }

    public function getQuizInfo($QuizID){
        
    }
   
}
