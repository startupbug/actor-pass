@extends('dashboard.dashboardmasterlayout')
@section('content')
    <div class="wrapper">
        <div class="heading_one">
            <h1>Dashboard</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="dashboard_box">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-body">
                        <h4 class="float-left text-left">About me</h4>
                        <h4 class="float-right text-right"><a href="{{route('profile_index')}}">Edit Profile</a></h4>
                    </div>
                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <td>
                                <label>Full Name <span>*</span></label>
                                
                                <p>{{isset(Auth::user()->fullname) ? Auth::user()->fullname : '-'}}</p>

                            </td>
                            <td>
                                <label>Phone <span>*</span></label>
                                <p>{{isset($profile->phone) ? $profile->phone : '-'}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email Address <span>*</span></label>
                                <p>{{isset(Auth::user()->email) ? Auth::user()->email : '-'}}</p>
                            </td>
                            <td>
                                <label>DOB <span>*</span></label>
                                <p>{{isset($profile->d_o_b) ? $profile->d_o_b : '-'}}</p>
                            </td>
                        </tr>
                        <!--<tr>
                            <td>
                                <label>Password <span>*</span></label>
                                <p>123456</p>
                            </td>
                            <td>
                                <label>I am a <span>*</span></label>
                                <p>Innovator</p>
                            </td>
                        </tr> -->
                    </table>

<!-- <div class="wrapper">
    <div class="heading_one">
        <h1>Dashboard</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="dashboard_box">
            <div class="panel panel-default">
                <!-- Default panel contents 
                <div class="panel-body">
                    <h4 class="float-left text-left">About me</h4>
                    <h4 class="float-right text-right"><a href="#">Edit Profile</a></h4>

                </div>
                <!-- Table 
                <table class="table">
                    <tr>
                        <td>
                            <label>Full Name <span>*</span></label>
                            <p>Andrew Noueman</p>
                        </td>
                        <td>
                            <label>Phone <span>*</span></label>
                            <p>021 345 6789 0</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email Address <span>*</span></label>
                            <p>andrew123@gmail.com</p>
                        </td>
                        <td>
                            <label>DOB <span>*</span></label>
                            <p>030-11-1985</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password <span>*</span></label>
                            <p>123456</p>
                        </td>
                        <td>
                            <label>I am a <span>*</span></label>
                            <p>Innovator</p>
                        </td>
                    </tr>
                </table> -->
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="dashboard_box">
            <div class="panel panel-default panel-min">
                <!-- Default panel contents -->
                <div class="panel-body">
                    <h4 class="float-left text-left">Recent Classes</h4>
                    <h4 class="float-right text-right"><a href="{{route('dash_classes')}}">View All</a></h4>
                </div>
                <!-- List group -->
                <ul class="list-group">
                @if(Auth::user()->role_id == 3)
                    <!-- Student -->
                    @foreach($recent_classes as $recent_class)
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="{{route('public_wall',['id'=>$recent_class->class_id])}}">{{$recent_class->title}} - Tought by {{$recent_class->teacher_name}}</a>
                                    </h4>
                                    <p>
                                        
                                    </p>
                                    @if($recent_class->class_status==1)
                                     <span class="label label-warning">under Review</span>
                                    @elseif($recent_class->class_status==0)
                                     <span class="label label-success">Availiable</span>
                                    @endif
                                </div>
                                <div class="media-right media-middle">
                                    <span class="media-object">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{$recent_class->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>                    
                    @endforeach
                @elseif(Auth::user()->role_id == 2)
                    <!-- Teacher -->
                    @foreach($recent_classes as $recent_class)
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="{{route('public_wall',['id'=>$recent_class->class_id])}}">{{$recent_class->title}} (Students: {{$recent_class->student_total}} )</a>
                                    </h4>
<!--                                     <p>
                                        
                                    </p> -->
                                    @if($recent_class->class_status==1)
                                     <span class="label label-warning">under Review</span>
                                    @elseif($recent_class->class_status==0)
                                     <span class="label label-success">Availiable</span>
                                    @endif
                                </div>
                                <div class="media-right media-middle">
                                    <span class="media-object">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{$recent_class->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>                    
                    @endforeach                    
                @endif

                </ul>
                </div>
            </div>
        </div><!--end notification-->

<!--             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="dashboard_box">
                    <div class="panel panel-default panel-min">
                        <!-- Default panel contents 
                        <div class="panel-body">
                            <h4 class="float-left text-left">Funded Details</h4>
                            <h4 class="float-right text-right"><a href="#">View All</a></h4>
                        </div>
                        <!-- List group 
                        <ul class="list-group">
                            <?php for ($a = 1; $a <= 3; $a++) { ?>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="#">Neque porro quisqauam estlium</a>
                                        </h4>
                                    </div>
                                    <div class="media-right media-middle paid_unpaid">
                                        <span class="media-object">
                                            <i class="fa fa-check" aria-hidden="true"></i> PAID
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div><!---./End Transaction --> 
        </div>
        @endsection    
