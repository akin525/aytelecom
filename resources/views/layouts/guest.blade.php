<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content=" We offer instant recharge of Airtime, Databundle, CableTV (DStv, GOtv & Startimes), Electricity Bill Payment and more">

    <title>AYTELECOM</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="@@class">

<div id="preloader">
    <i>A</i>
    <i>Y</i>
    <i>T</i>
    <i>E</i>
    <i>L</i>
    <i>E</i>
    <i>C</i>
    <i>O</i>
    <i>M</i>
</div>
<style>
    .bob {
        min-height:100%;
        background:linear-gradient(0deg, rgba(16, 15, 15, 0.78), rgba(2, 2, 2, 0.73)), url(images/dg.png);
        background-size:cover;
    }
</style>
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
    @include('sweetalert::alert')
<div class="authincation section-padding overlay bob">
            {{ $slot }}
        </div>

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="js/scripts.js"></script>


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
    <a href="https://wa.me/2348119290699/?text=Goodday, My Username is....." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    </body>
