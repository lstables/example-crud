@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Car</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/cars', 'class' => 'form-horizontal']) !!}

                            <div class="form-group">
                                <div class="col-sm-3">Car Name</div>
                                <div class="col-lg-7">
                                    <input type="text" name="car_name" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Type</div>
                                <div class="col-lg-7">
                                    <input type="text" name="type" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Model</div>
                                <div class="col-lg-7">
                                    <input type="text" name="model" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Make</div>
                                <div class="col-lg-7">
                                    <input type="text" name="make" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">Status</div>
                                <div class="col-lg-7">
                                    <select name="active" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="col-lg-3">
                                 <button class="btn btn-success">Create</button>
                              </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection