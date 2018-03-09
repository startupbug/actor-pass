@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Classes List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Teacher Name</th>
                                    <th>Location</th>
                                    <th>Cost</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Age</th>
                                    <th>Links</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($index as $value)
                                    <tr>
                                        <td>{{$value->users->fullname}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->cost}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->time}}</td>
                                        <td>{{$value->age}}</td>
                                        <td>{{$value->link}}</td>
                                        <td>{{$value->description}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="{{route('edit_class',['id'=>$value->id])}}">Edit</a></li>
                                                    <!-- <li><a href="">View</a></li> -->
                                                    <li><a href="{{route('delete_class',['id'=>$value->id])}}">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="s_button">
                            <a class="btn btn-primary" href="{{route('create_class')}}">Create</a>
                        </div>  
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection