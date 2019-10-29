@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3 class="text-center"> Update School Information</h3></label>

                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form method="POST" action="{{ route('school-update', $user->id) }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>User Name :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>School Name :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="school_name" value="{{ $user->school_name }}"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Email :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Address :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea type="text" name="address" rows="4" class="form-control">{{
                                    $user->address
                                    }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <button class="btn btn-success" name="btn" type="submit">Update</button>
                            <a href="{{ route('school.index') }}" class="btn btn-danger">back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection