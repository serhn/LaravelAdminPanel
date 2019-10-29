<?php

namespace Serh\LaravelAdminPanel\Controllers\Admin;

use Illuminate\Http\Request;
use Serh\LaravelCrud\Traits\CrudAndView;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use CrudAndView;
    private $tab = [
        "name" => [
            "type" => "text",
            "name" => "Name",
            "maxlength" => "255"
        ],
        "email" => [
            "type" => "email",
            "name" => "E-Mail",
            "maxlength" => "255"
        ],
        "created_at" => [
            "type" => "text",
            "name" => "Create",
            "edit" => "0"

        ]
    ];
    private $name = "Users";

    private $model = User::class;
    /*public function index()
    {
        return view("admin.startbootstrap-sb-admin-2/index");
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {//dd(Auth::check());
        

        $this->layout = "admin::layouts.app";
    }
    public function home()
    {
        if (Auth::check()) {
           
            //$id = Auth::user()->id;

            // dd(Auth::user());
            //$user = User::find($id);
            //$user->assignRole('super-admin');
            //$perm=$user->getRole();
            //dd($user->hasRole('super-admin'));
        }
        # code...
        return view("admin::index");
    }
}
