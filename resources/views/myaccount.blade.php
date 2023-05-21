@include('layouts.sidebar')
<div class="page-title">
    <div class="row align-items-center justify-content-between">
        <div class="col-xl-4">
            <div class="page-title-content">
                <h3>My Account</h3>
            </div>
        </div>
        <div class="col-auto">
            <div class="breadcrumbs"><a href="{{route('dashboard')}}">Home </a><span>
                    <i class="ri-arrow-right-s-line"></i></span><a href="#">My Account</a></div>
        </div>
    </div>
</div>

{{--ALTER TABLE `users` ADD `address` VARCHAR(900) NULL DEFAULT NULL AFTER `phone`, ADD `gender` VARCHAR(200) NULL DEFAULT NULL AFTER `address`, ADD `dob` VARCHAR(200) NULL DEFAULT NULL AFTER `gender`;--}}
<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="clearfix">
            <div class="card card-bx profile-card author-profile m-b30">
                <div class="card-body">
                    <div class="p-5">
                        <div class="author-profile">
                            <div class="author-media text-center">
                                    <img width="50" class="rounded-circle" src="{{asset('images/profile/3.png')}}" alt="#" />
                            </div>
                            <div class="text-center">
                                <h6 class="title">{{$all['name']}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        @if(Auth::user()->apikey !=NULL)
                            <button type="button" class="badge badge-success">Reseller</button>
                            <button type="button" class="badge badge-success">Upgraded</button>
                        @else
{{--                            <a href="{{route('reseller')}}" class="badge badge-success">Upgrade Now</a>--}}
                            <button type="button" class="btn btn-success">Customer</button>
                        @endif
                    </div>
                </div>
                @if($all->account_number != '1')
                    <div class="card alert alert-success">
                        <ul style="list-style-type:square">
                            <li class="text-white"><h6 class="text-white"><b>Personal Virtual Account Number</b></h6></li>
                            <br>
                            <li class='text-white'><h6 class="text-white"><b>{{$all->account_name}}</b></h6></li>
                            <li class='text-white'><h6 class="text-white"><b>Account No:{{$all->account_number}}</b></h6></li>
                            @if(Auth::user()->bank==NULL)
                            <li class='text-white'><h6 class="text-white"><b>Bank: Wema</b></h6></li>
                            @else
                                <li class='text-white'><h6 class="text-white"><b>Bank: {{$all->bank}}</b></h6></li>
                                @endif
                                <br>
                            <li class='text-white'><h6 class="text-white"><b>Note: All virtual funding are being set automatically</b></h6></li>
                        </ul>
                    </div>
                @endif
                @if($all->account_number=="1")
                    <a href="{{route('vertual')}}" class="btn btn-danger text-center">Generate Account </a>
                @endif
                <div class="card-footer text-center">

                    <div class="input-group">
                        <a href="{{route('dashboard')}}" class="form-control text-primary text-start bg-white text-center">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-8">
        <div class="card profile-card card-bx m-b30">
            <div class="card-header">
                <h6 class="title">Account setup</h6>
            </div>

            <form class="profile-form" method="post" action="{{route('update')}}">
                @csrf
                <div class="card-body">
                    <x-jet-validation-errors class="alert alert-danger" />

                    <div class="row">
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$all['name']}}"/>
                        </div>
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$all['username']}}" readonly/>
                        </div>

                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Gender</label>
                            <select class="default-select form-control" id="validationCustom05" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Birth</label>
                            <input type="date" class="form-control" name="dob" value="{{$all['dob']}}"/>
                        </div>
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Phone</label>
                            <input type="number" class="form-control" name="number" value="{{$all['phone']}}"/>
                        </div>
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{$all['email']}}"/>
                        </div>
                        <div class="col-sm-6 m-b30">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$all['address']}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary">UPDATE NOW</button>
                    <a href="{{route('profile.show')}}"  class="btn btn-outline-primary">SETTINGS</a>
                </div>
            </form>
        </div>
    </div>
</div>
