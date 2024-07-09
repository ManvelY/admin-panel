@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/member_edit.css">
@endsection

@section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('members_update',['id'=> $member->id])}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT">
            <div class="form-row">
                <div class="col">
                    <label for="" class="col-sm-2 col-form-label">  First Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstName" value="{{$member->firstName}}">
                    </div>
                </div>
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastName" value="{{$member->lastName}}">
                        </div>
                    </div>
                </div>
                     <div class="form-row">
                <div class="col">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{$member->email}}">
                    </div>
                </div>
                    <div class="col">
                    <label for="" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="avatar" value="{{$member->avatar}}">
                    </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="col">
                <label for="" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="position" value="{{$member->position}}">
                </div>
                </div>
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Salary</label>
                        <div class="col-sm-10">
                            <input type="number" name="salary" class="form-control" value="{{$member->salary}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-control" id="gender" >
                            <option value="male" {{$member->gender == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{$member->gender == 'female' ? 'selected' : ''}}>Female</option>
                        </select>
                    </div>

                    </div>
                        <div class="col">
                            <label for="" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="age" value="{{$member->age}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="" class="col-sm-2 col-form-label">Started At</label>
                            <div class="col-sm-10">
                                <input type="text" name="startedAt" placeholder="Ex: 2024/01/30" class="form-control" value="{{$member->startedAt}}"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-sm-12 submit-btn-content">
                                <a class="btn btn-sm btn-primary back-button" href="{{route('members_index')}}">Go Back</a>
                                <input type="submit" value="Save" class="btn btn-sm btn-success">
                            </div>
                        </div>
                    </div>
            </div>
    </form>
</div>
@endsection