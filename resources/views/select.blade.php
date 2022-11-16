@include('layouts.sidebar')
<div class="page-title">
    <div class="row align-items-center justify-content-between">
        <div class="col-xl-4">
            <div class="page-title-content">
                <h3>Data</h3>
            </div>
        </div>
        <div class="col-auto">
            <div class="breadcrumbs"><a href="{{route('dashboard')}}">Home </a><span>
                    <i class="ri-arrow-right-s-line"></i></span><a href="#">Data</a></div>
        </div>
    </div>
</div>

        <!-- end page title -->
<div class="row">
    <!--    <div class="card">-->
    <div class="card-body">
        <div class="module-head">
            <center><h3>
                    Select Network</h3></center>
        </div>
        <center>
            <div class="btn-controls">
                <form action="{{ route('buydata') }}" method="POST">
                    @csrf
                    <label for="network" class=" requiredField">
                        Network<span class="asteriskField">*</span>
                    </label>
                    <select  name="id" class="text-success form-control" required="">
                        @if ($serve->name == 'mcd')
                            <option value="mtn-data">MTN</option>
                            <option value="glo-data">GLO</option>
                            <option value="etisalat-data">9MOBILE</option>
                        @else
                            <option value="MTN">MTN</option>
                            <option value="GLO">GLO</option>
                            <option value="9MOBILE">9MOBILE</option>
                        @endif
                        @if ($serve->name == 'mcd')
                            <option value="airtel-data">AIRTEL</option>
                        @else
                            <option value="AIRTEL_DG">AIRTEL_DG</option>
                            <option value="AIRTEL_CG">AIRTEL_CG</option>
                        @endif
                    </select>

                    <br>
                    <button type="submit" class=" btn" style="color: white;background-color: #28a745">Click Next<span class="load loading"></span></button>
                    <script>
                        const btns = document.querySelectorAll('button');
                        btns.forEach((items)=>{
                            items.addEventListener('click',(evt)=>{
                                evt.target.classList.add('activeLoading');
                            })
                        })
                    </script>
                </form>
        </center>
        <br>



        <p>You can use the codes below to check your Data Balance!  </p>

        <h6>
            <ul>
                <li class="list-group-item list-group-item-primary"> MTN [SME] *461*4# or *556#</li>
                <li class="list-group-item list-group-item-success">MTN [CG] *131*4# or *460*260#</li>
                <li class="list-group-item list-group-item-action">9mobile [Gifting] *228#</li>
                <li class="list-group-item list-group-item-primary">Airtel *140#</li>
                <li class="list-group-item list-group-item-primary">Glo *127*0#</li>
            </ul>
        </h6>



        <br>
    </div>
</div>

@include('layouts.footer')
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
<a href="http:wa.me/2348034547657/?text=Goodday, My Username is....." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

