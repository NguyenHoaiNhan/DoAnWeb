<?php

namespace App\Models;

use CodeIgniter\Model;

class Quiz_model extends Model
{
    public function fetch_data($limit, $start)
    {
        $query = $this->db->query("select * from tracnghiem limit $start, $limit");
        $data = $query->getResult('array');
        return $data;
    }

}
