<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intez</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('ayy.jpeg')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5614354777986303"
            crossorigin="anonymous"></script>
</head>

<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>
@include('sweetalert::alert')

<div id="main-wrapper">


    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="header-content">
                        <div class="header-left">
                            <div class="brand-logo"><a class="mini-logo" href="/dashboard"><img src="{{asset('bv2.png')}}" alt="" width="40"></a></div>
                            <div class="search">
                                <form action="#">
                                    <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                                </form>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                            <div class="dropdown profile_log dropdown">
                                <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                    <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                                </div>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                                    <div class="user-email">
                                        <div class="user">
                                            <span class="thumb"><img src="{{asset('images/profile/3.png')}}" alt=""></span>
                                            <div class="user-info">
                                                <h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                                                <span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="{{route('profile.show')}}"><span><i class="ri-user-line"></i></span>Profile</a>
                                   <a class="dropdown-item logout" href="{{route('logout')}}"><i class="ri-logout-circle-line"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar">
{{--        <div class=""><a class="" href="{{route('dashboard')}}"><img src="{{asset('bv2.png')}}" alt="" width="80"></a></div>--}}
        <div class="menu">
            <ul>
                @if(Auth::user()->role=='admin')
                <li><a href="{{route('admin/dashboard')}}">
                        <span><i class="ri-admin-fill"></i></span>
                        <span class="nav-text">Admin</span>
                    </a>
                </li>
                @endif
                <li><a href="{{route('dashboard')}}">
                        <span><i class="ri-home-5-line"></i></span>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="{{route('fund')}}">
                        <span><i class="ri-book-mark-fill"></i></span>
                        <span class="nav-text">Transaction</span>
                    </a>
                </li>
                <li><a href="{{url('recharge')}}">
                        <span><i class="ri-phone-line"></i></span>
                        <span class="nav-text">Recharge</span>
                    </a>
                </li>

{{--                <li><a href="{{route('select')}}">--}}
{{--                        <span><i class="ri-chat-new-fill"></i></span>--}}
{{--                        <span class="nav-text">Buy Datae</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li><a href="{{url('picktv')}}">
                        <span><i class="ri-tv-2-fill"></i></span>
                        <span class="nav-text">Paytv</span>
                    </a>
                </li>
                <li><a href="{{url('elect')}}">
                        <span><i class="ri-lightbulb-fill"></i></span>
                        <span class="nav-text">Electricity</span>
                    </a>
                </li>
                <li class="logout"><a href="/logout">
                        <span><i class="ri-logout-circle-line"></i></span>
                        <span class="nav-text">Signout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content-body">
        <div class="container">

            <style>

                * {
                    padding: 0;
                    margin: 0
                }


                button {
                    padding: 20px 30px;
                    font-size: 1.5em;
                    /*width:200px;*/
                    cursor: pointer;
                    border: 0px;
                    position: relative;
                    /*margin: 20px;*/
                    transition: all .25s ease;
                    /*background: rgba(116, 23, 231, 1);*/
                    color: #fff;
                    overflow: hidden;
                    border-radius: 10px
                }

                .load {
                    position: absolute;
                    left: 0px;
                    top: 0px;
                    width: 100%;
                    height: 100%;
                    background: inherit;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: inherit
                }

                .load::after {
                    content: '';
                    position: absolute;
                    border-radius: 50%;
                    border: 3px solid #fff;
                    width: 30px;
                    height: 30px;
                    border-left: 3px solid transparent;
                    border-bottom: 3px solid transparent;
                    animation: loading1 1s ease infinite;
                    z-index: 10
                }

                .load::before {
                    content: '';
                    position: absolute;
                    border-radius: 50%;
                    border: 3px dashed #fff;
                    width: 30px;
                    height: 30px;
                    border-left: 3px solid transparent;
                    border-bottom: 3px solid transparent;
                    animation: loading1 2s linear infinite;
                    z-index: 5
                }

                @keyframes loading1 {
                    0% {
                        transform: rotate(0deg)
                    }

                    100% {
                        transform: rotate(360deg)
                    }
                }

                button.active {
                    transform: scale(.85)
                }

                button.activeLoading .loading {
                    visibility: visible;
                    opacity: 1
                }

                button .loading {
                    opacity: 0;
                    visibility: hidden
                }
            </style>

            <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


            <script src="{{asset('vendor/chartjs/chartjs.js')}}"></script>



            <script src="{{asset('js/plugins/chartjs-line-init.js')}}"></script>




            <script src="{{asset('js/plugins/chartjs-donut.js')}}"></script>






            <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
            <script src="{{asset('js/plugins/perfect-scrollbar-init.js')}}"></script>



            <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
            <script src="j{{asset('s/plugins/circle-progress-init.js')}}"></script>







            <script src="{{asset('js/scripts.js')}}"></script>

            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>




<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/2348156400044/?text=Goodday, My Username is {{\Illuminate\Support\Facades\Auth::user()->username}}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 07:53:05 GMT -->
</html>
