<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\MemberCreateRequest;
use Str;

class MembersController extends Controller
{
    public function index() {

        $members = Member::all();

        return view("members.index",["members"=> $members]);
    }


    public function create()
    {
        return view("members.create");
    }

    public function delete($id) {

    }

    public function store(MemberCreateRequest $request) {
        $inputs =  $request->validated();
        $inputs['startedAt'] = Carbon::parse($inputs['startedAt']);
        $inputs['slug'] = Str::slug(Str::random());

        Member::create($inputs);
         
        return redirect()->route("members_index");
    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }
}
