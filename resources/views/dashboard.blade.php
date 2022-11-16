@include('layouts.sidebar')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<div class="page-title">
    <div class="row align-items-center justify-content-between">
        <div class="col-xl-4">
            <div class="page-title-content">
                <h3>Dashboard</h3>
                <p class="mb-2">Welcome Back {{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="col-auto">
            <div class="breadcrumbs"><a href="#">Home </a><span><i
                        class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>
        </div>
    </div>
</div>
<div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
    <div class="alert-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <h4 class="alert-heading"><b>Notification  !</b></h4>
{{--                <p class="mb-0">Notification for Minimum amount funding</p>--}}
            </div>
        </div>
    </div>
    <div class="alert-content">
        <p class="mb-0">{{$me->message}}t</p>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>Wallets</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-primary"><span><i
                                        class="ri-wallet-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</h3>
                                <p>Wallet Balance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-secondary"><span><i
                                        class="ri-wallet-2-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($totaldeposite *1), 2)}}</h3>
                                <p>Total Deposit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-success"><span><i
                                        class="ri-wallet-3-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($bill *1), 2)}}</h3>
                                <p>Total Purchase</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-danger"><span><i
                                        class="ri-wallet-3-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($charge *1), 2)}} </h3>
                                <p>All Charges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div id="user-activity" class="card" data-aos="fade-up">
            <div class="card-header">
                <h4 class="card-title">Virtual Account Detail</h4>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div class="card">
                    <div class="">
                        <div class="alert alert-primary">
                                @if (Auth::user()->account_number==1 && Auth::user()->account_name==1)
                                    <a href='{{route('vertual')}}' class='btn btn-primary'>Click this section to get your  Virtual Bank Account</a>
                                @else
                                    <div class="row column1">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="card-body">
                                                <ul style="list-style-type:square">
{{--                                                    <li class="text-white"><h6 class="text-white"><b>Personal Virtual Account Number</b></h6></li>--}}
{{--                                                    <br>--}}
                                                    <li class='text-white'><h6 class="text-white"><b>{{Auth::user()->account_name}}</b></h6></li>
                                                    <li class='text-white'><h6 class="text-white"><b>Account No:{{Auth::user()->account_number}}</b></h6></li>
                                                    <li class='text-white'><h6 class="text-white"><b>WEMA-BANK</b></h6></li>
{{--                                                    <br>--}}
{{--                                                    <li class='text-white'><h6 class="text-white"><b>Note: All virtual funding are being set automatically</b></h6></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-6">
                                            <div>
                                                <center>
                                                    <a href="#">
                                                        <img width="200" src="{{asset("images/logoi.png")}}"  alt="">
                                                    </a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <div class="invoice-table">
                    <h4 class="fw-bold"><b>Purchase History</b></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check"><input class="form-check-input"
                                                                   type="checkbox" id="flexCheckDefault" value=""></div>
                                </th>
                                <th>Username</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Number</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bil3 as $dp)
                            <tr>
                                <td>
                                    <div class="form-check"><input class="form-check-input"
                                                                   type="checkbox" id="flexCheckDefault" value=""></div>
                                </td>
                                <td>{{$dp->username}}</td>
                                <td>{{$dp->plan}}</td>
                                <td>{{$dp->amount}}</td>
                                <td>{{$dp->phone}}</td>
                                <td>{{$dp->date}}</td>
                                <td>@if($dp->result==1)
                                        <span class="badge px-3 py-2 bg-success">Delivered</span>
                                    @else
                                        <span class="badge px-3 py-2 bg-warning">Pending</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$bil3->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
