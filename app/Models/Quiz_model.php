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
        $query = $this->db->query(
            "
            select q.id QuestionID, q.question QuestionContent, q.a OptA, q.b OptB, q.c OptC, q.d OptD
            from multiplechoice m, belong b, question q 
            where m.id = b.mcid and b.qid = q.id and m.id = " . $QuizID
        );
        $data = $query->getResult('array');
        return $data;
    }

    public function checkResult($QuizID)
    {
        $query = $this->db->query(
            "select q.id, q.answer 
            from question q, multiplechoice m, belong b
            where q.id = b.qid and b.mcid = m.id and m.id = ". $QuizID
        );
        $data = $query->getResult('array');
        return $data;
    }

    public function getResultByQuizID($QuizID)
    {
        $query = $this->db->query(
            "
            select q.id QuestionID, q.question QuestionContent, q.a OptA, q.b OptB, q.c OptC, q.d OptD, q.answer Answer
            from multiplechoice m, belong b, question q 
            where m.id = b.mcid and b.qid = q.id and m.id = " . $QuizID
        );
        $data = $query->getResult('array');
        return $data;
    }

    // -----------------------------------------------------------------------------------------

    public function fetch_question($limit, $start)
    {
        $query = $this->db->query("select * from question limit $start, $limit");
        $data = $query->getResult('array');
        return $data;
    }
    public function fetch_question_1()
    {
        $query = $this->db->query("select * from question");
        $data = $query->getResult('array');
        return $data;
    }
    public function edit_question($id, $question, $filter, $opta, $optb, $optc, $optd, $answer, $uid)
    {
        $query = $this->db->query("update question set question = '" . $question . "',filter = '" . $filter . "',A = '" . $opta . "',B = '" . $optb . "', C = '" . $optc . "',D = '" . $optd . "',answer = '" . $answer . "',uid = '" . $uid . "' where id = '" . $id . "'");
    }

    public function fetch_tag()
    {
        $query = $this->db->query("select * from tag");
        $data = $query->getResult('array');
        return $data;
    }

    public function addQuiz($question, $filter, $opta, $optb, $optc, $optd, $answer, $uid)
    {
        $query = $this->db->query("
            INSERT INTO question ( question, filter, A, B, C, D, answer, uid) 
            VALUES ('" . $question . "','" . $filter . "','" . $opta . "','" . $optb . "','" . $optc . "','" . $optd . "','" . $answer . "','" . $uid . "')
        ");
    }
}
