@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>School Information</h3></label>
                        <a href="{{ url('/student/index') }}" class="btn btn-danger pull-right">Back</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form action="{{ route('student-update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $student->name }}" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $student->email }}" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $student->number }}" name="number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $student->blood_group }}"
                                   name="blood_group">
                        </div>
                    </div>

                    <input type="hidden" class="form-control" name="is_approve" value="0">

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="address">{{ $student->address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Select School</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="user_id" required="required">
                                <option>--Select Category--</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"{{ $user->id == $student->user_id ? 'selected' : ''
                                    }}>{{
                                    $user->school_name
                                     }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection