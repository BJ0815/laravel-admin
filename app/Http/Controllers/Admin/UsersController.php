<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('role:users');
    }
    // Index Page for Users
    public function index()
    {
        $users = User::paginate(10);
        
        $params = [
            'title' => 'Users Listing',
            'users' => $users,
        ];
        return view('admin.users.users_list')->with($params);
    }
}