@extends('layouts.app')

@section('head')
    <style>
        .form-row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .col {
            max-width: 48%;
            margin-right: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .submit-btn-content {
            display: flex;
            justify-content: flex-end;
        }
    </style>
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
        <form method="POST" action="{{route('members_store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-row">
                <div class="col">
                    <label for="" class="col-sm-2 col-form-label">  First Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstName">
                    </div>
                </div>
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastName">
                        </div>
                    </div>
                </div>
                     <div class="form-row">
                <div class="col">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                    <div class="col">
                    <label for="" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="avatar">
                    </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="col">
                <label for="" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="position">
                </div>
                </div>
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Salary</label>
                        <div class="col-sm-10">
                            <input type="number" name="salary" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-control" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    </div>
                        <div class="col">
                            <label for="" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="age">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="" class="col-sm-2 col-form-label">Started At</label>
                            <div class="col-sm-10">
                                <input type="text" name="startedAt" placeholder="Ex: 2024/01/30" class="form-control"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-sm-12 submit-btn-content">
                                <input type="submit" value="Create" class="btn btn-sm btn-success">
                            </div>
                        </div>
                    </div>
            </div>
    </form>
</div>
@endsection