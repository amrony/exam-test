@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
{{--            <a href="" class="btn btn-danger m-t-15 waves-effect">Mobile Recharge</a>--}}
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="">Student List</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Is Approve</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @foreach($students as $key => $student)
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->number }}</td>
                            <td>{{ $student->address }}</td>
{{--                            <td>{{ $student->is_approve == 0 ? 'Pending' : 'Active' }}</td>--}}
                                <td>
                                    @if($student->is_approve == 0)
                                        <h3> <span class="badge bg-danger text-white">Pending</span></h3>
                                    @else
                                        <h3><span class="badge bg-success text-white">Active</span></h3>
                                    @endif
                                </td>
                                <td>
                                    @if($student->is_approve == 0)
                                        <a href="{{ route('student-approve', $student->id) }}" type="button"
                                           id="approve_button"
                                           class="btn btn-info waves-effect"
                                                onclick="return confirm('Are You Sure Approved This :( ')">
                                            <i class="fa fa-check-circle"></i>
                                            <span>Approve</span>
                                        </a>
                                        @else
                                        <a href="{{ route('student-approve', $student->id) }}" type="button"
                                           id="approve_button"
                                           class="btn btn-success waves-effect"
                                           onclick="return confirm('Are You Sure Unapproved This :( ')">
                                            <i class="fa fa-check-circle"></i>
                                            <span>Approved</span>
                                        </a>
                                        @endif

                                        <a href="{{ route('student-edit', $student->id) }}" class="btn btn-warning
                                        btn-sm">
                                            <span class="fa fa-pencil-square-o"></span>
                                        </a>

                                        <a href="{{ route('student-delete', $student->id) }}" class="btn btn-danger
                                        btn-sm"
                                           onclick="return confirm
                                        ('Are ' +
                                         'You ' +
                                         'Sure Delete This !')">
                                            <span class="fa fa-trash-o"></span>
                                        </a>


                                </td>
                                @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
