@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cars
                        <div class="pull-right">
                            <a href="/admin/cars/create" class="btn btn-sm btn-primary">Create New</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Car Name</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{!! $car->car_name !!}</td>
                                        <td>{!! $car->make !!}</td>
                                        <td>{!! $car->model !!}</td>
                                        <td>
                                            <a href="/admin/cars/edit/{!! $car->id !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            {!! Form::open(['url' => '/admin/cars/' . $car->id]) !!}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to remove this?')"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pull-right"> {!! $cars->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection