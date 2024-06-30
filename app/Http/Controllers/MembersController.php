<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index() {

        $members = Member::select('id','email')->get();

        dd($members);

        return view("members.index",["members"=> $members]);
    }
}
