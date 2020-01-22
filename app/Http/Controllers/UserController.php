<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Teacher;
use DataTables;
class UserController extends Controller
{
    public function json(){
        return Datatables::of(Teacher::all())->make(true);
    }
 
    public function index(){
        return view('list_users');
    }
}