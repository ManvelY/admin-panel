<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\MemberCreateRequest;
use Str;
use Auth;

class MembersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $members = Member::all();

        return view("members.index",["members"=> $members]);
    }


    public function create()
    {
        if(Auth::user()->role == 'writer') {
            return redirect(route('members_index'));
        }
            return view("members.create");
    }

    public function destroy($id) {
        $member = Member::findOrFail($id);

        $member->delete();

        return redirect()->route("members_index");
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
        if (Auth::user()->role == 'writer') {
            return redirect(route('members_index'));
        }

        $member = Member::findOrFail($id);

        return view("members.edit",["member"=> $member]);
    }

    public function update(MemberCreateRequest $request, $id) {

        $inputs = $request -> validated();
        $member = Member::findOrFail($id);
        $member->update($inputs);

        return redirect()-> route("members_index");
    }
}
