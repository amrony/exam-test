@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('recharge.create') }}" class="btn btn-danger m-t-15 waves-effect">Mobile Recharge</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>

        <div class="tile">
            <h3 class="tile-title">All About Us</h3>
            <div class="row">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>TXID</th>
                        <th>Operator</th>
                        <th>Number</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Operator Id</th>
                        <th>Recharge By</th>
                        <th>Date Time</th>
                    </tr>
                    </thead>
{{--                    @dd($recharges);--}}
                    <tbody>
                    @foreach($recharges as $key=>$recharge)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $recharge->operator->name }}</td>
                            <td>{{ $recharge->number }}</td>
                            <td>{{ $recharge->amount }}</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
