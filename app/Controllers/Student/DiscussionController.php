<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;

class DiscussionController extends BaseController
{
    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Thảo luận', 'Discussion', 'Discussion');
        return view('Student/main', $PageInfo);
    }
}
