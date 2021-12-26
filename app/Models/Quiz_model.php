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

    function getBookmarkedQuiz($userID)
    {
        $query = $this->db->query("
            select m.title, m.description, m.id, m.total, m.time
            from user u, interaction i, multiplechoice m
            where i.favorite = '1' and u.id = i.uid and i.mcid = m.id and u.id = '".$userID."';
        ");
        $data = $query->getResult('array');
        return $data;
    }

    public function bookmarkQuiz($userID, $quizID)
    {
        $query = $this->db->query("insert into interaction(uid, mcid, favorite) values('".$userID."','".$quizID."','1');");
    }

    public function bookmarkQuizByUpdate($userID, $quizID)
    {
        $query = $this->db->query("
            update interaction 
            set favorite = '1'
            where uid = '".$userID."' and mcid = '".$quizID."'");
    }

    public function removeFromBookmark($userID, $quizID)
    {
        $query = $this->db->query("
            update interaction 
            set favorite = '0'
            where uid = '".$userID."' and mcid = '".$quizID."';");
    }

    public function searchQuiz($filter, $text)
    {
        $data = '';
        if($filter == 'all'){
            $query = $this->db->query("
                select id, title, description, time, total from multiplechoice where lower(title) like '%".$text."%'
                union 
                select id, title, description, time, total from multiplechoice where lower(description) like '%".$text."%'");
            $data = $query->getResult('array');
        }else{
            if($text == ''){
                $query = $this->db->query("select id, title, description, time, total from multiplechoice where filter = '".$filter."'");
                $data = $query->getResult('array');
            }else{
                $query = $this->db->query("
                    select id, title, description, time, total from multiplechoice where lower(title) like '%".$text."%' and filter = '".$filter."'
                    union 
                    select id, title, description, time, total from multiplechoice where lower(description) like '%".$text."%' and filter = '".$filter."'");
                $data = $query->getResult('array');
            }
        }

        return $data;
    }


    // kiểm tra xem user, quiz có trong bảng interactio hay chưa
    public function isExistsInInteraction($quizID, $userID)
    {
        $query = $this->db->query("
            select *
            from interaction 
            where uid = '".$userID."' and mcid = '".$quizID."'");
        $data = $query->getResult('array');

        $exists = 0;
        if(count($data) != 0){
            $exists = 1;
        }

        // return 0 nếu không tồn tại, 1 nếu tồn tại
        return $exists;
    } 

    public function isQuizDoneByUser($quizID, $userID)
    {
        $query = $this->db->query("
            select done
            from interaction 
            where uid = '".$userID."' and mcid = '".$quizID."'");
        $data = $query->getResult('array');

        $value = '';
        foreach($data as $row){
            $value = $row['done'];
        }
        return $value;
    }

    public function addScoreToUser($userID, $quizID, $score)
    {
        $query = $this->db->query("insert into interaction(uid, mcid, score, done) values('".$userID."', '".$quizID."', '".$score."', '1');");
    }

    public function addScoreToUserByUpdate($userID, $quizID, $score)
    {
        $query = $this->db->query("
            update interaction 
            set score = '".$score."', done = '1'
            where uid = '".$userID."' and mcid = '".$quizID."'");
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
