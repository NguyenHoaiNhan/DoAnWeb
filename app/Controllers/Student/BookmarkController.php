<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\Quiz_model;

class BookmarkController extends BaseController
{
    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Đánh dấu', 'Bookmark', 'Bookmark', 0);
        return view('Student/main', $PageInfo);
    }
}
