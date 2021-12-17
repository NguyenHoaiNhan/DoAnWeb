<?php
namespace App\Controllers\Student;

use App\Controllers\BaseController;

class AccountController extends BaseController
{
    public function index()
    {
        $PageInfo = $this->loadMasterLayout('Tài khoản', 'Account', 'Account');
        return view('Student/main', $PageInfo);
    }
}