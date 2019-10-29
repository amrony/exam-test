@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('recharge.create') }}" class="btn btn-danger m-t-15 waves-effect">Mobile Recharge</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">Company Information</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    {{--                    @dd($recharges);--}}
                    <tbody>
                        <tr>----</tr>
                        <tr>----</tr>
                        <tr>----</tr>
                        <tr>----</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
