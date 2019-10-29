@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>MOBILE RECHARGE (Prepaid)</h3></label>
                        <a href="{{ route('recharge.index') }}" class="btn btn-info pull-right">Last 5 Transaction</a>
                        <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
                    </div>
                </div>
            </div>
            <div class="tile-body col-md-10 m-auto">
                <form method="POST" action="{{ route('recharge.store') }}" class="form-horizontal">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Mobile Number :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="number" class="form-control"
                                           placeholder="Enter your number">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-2">Select Operator :</label>
                        <div class="col-md-10">
                            <select class="form-control" name="operator_id" required="required">
                                <option value="0">---Select Operator---</option>
                                @foreach($operators as $operator)
                                    <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                               @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('location_id') ? $errors->first('location_id') : '' }}</span>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Amount :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="amount" class="form-control"
                                           placeholder="Enter your amount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <button class="btn btn-success" name="btn" type="submit">Recharge</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection