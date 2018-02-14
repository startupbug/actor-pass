<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 r-m-p left_dash">
    <div class="dashboard_left_side clearfix">
        <a href="index.php" class="navbar-brand">
            <img src="{{ asset('assets/images/logo_actor.png') }}" class="img-responsive center-block"/>
        </a>
        <div class="user_deatils">
            <a href="#">
                <div class="avatar_box">
                    <!--<img src="{{ asset('dashboard_assets/images/funder_user_img.png') }}" class="img-responsive center-block img-circle"/> -->
                    
                    @if(isset(Auth::user()->profile->profile_pic))
                        <img src="{{ asset('dashboard_assets/images/profile/'.Auth::user()->profile->profile_pic) }}" class="img-responsive center-block img-circle"/>                        
                    @else
                        <img src="{{ asset('dashboard_assets/images/user-dummy.png') }}" class="img-responsive center-block img-circle"/>
                    @endif


                    <span class="camera_image">
                    <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
                        <input type="file" id="image_upload" value="" style="display: none"/>
                </span>
                </div>
            </a>
            <h3>
                @if(isset(Auth::user()->username))
                   <a href="#">{{Auth::user()->username}}</a>
                @endif
            </h3>
            
            <p>
                @if(isset(Auth::user()->roles()->first()->display_name))
                 {{ Auth::user()->roles()->first()->display_name }}
                @endif
            </p>

        </div><!--./End user details-->
        <div class="dashboard_navigation">
            <ul class="nav">
                <li><a href="{{route('dash_index')}}" class="actives" #"><i class="fa fa-tachometer"
                                                              aria-hidden="true"></i>Dashboard</a></li>
                <li><a href="{{route('profile_index')}}"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>

                <!--
                <li><a href="notification.php"><i class="fa fa-bell-o" aria-hidden="true"></i>Notifications</a></li>
                <li><a href="listing.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Viewed Listings</a></li>
                <li><a href="contact.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>Request Listing Review</a>
                </li>
                <li><a href="transaction.php"><i class="fa fa-credit-card" aria-hidden="true"></i>Funded Details</a>
                </li> -->
                <li><a href="{{route('logout_user')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
            </ul>
        </div>
    </div>
</div><!---./End Left Side--->
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 r-m-p right_dash">