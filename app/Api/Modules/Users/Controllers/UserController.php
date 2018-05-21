<?php
namespace App\Api\Modules\Users\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('Users::index');
    }
}
