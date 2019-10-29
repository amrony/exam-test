@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
{{--            <a href="" class="btn btn-danger m-t-15 waves-effect">back</a>--}}

            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">School List</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>User Name</th>
                        <th>School Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    {{--                    @dd($recharges);--}}
                    <tbody>
                    @foreach($users as $key=>$user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->school_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="{{ route('school.edit', $user->id) }}" class="btn btn-success btn-sm">
                                    <span class="fa fa-pencil-square-o fa-3x"></span>
                                </a>

                                <a href="{{ route('school_destroy', $user->id) }}" class="btn
                                btn-danger btn-sm"
                                   onclick="return confirm('Are You Sure Delete This !')">
                                    <span class="fa fa-trash-o"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

