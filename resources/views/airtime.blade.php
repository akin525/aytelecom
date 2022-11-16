@include('layouts.sidebar')
<div class="page-title">
    <div class="row align-items-center justify-content-between">
        <div class="col-xl-4">
            <div class="page-title-content">
                <h3>Airtime</h3>
            </div>
        </div>
        <div class="col-auto">
            <div class="breadcrumbs"><a href="{{route('dashboard')}}">Home </a><span>
                    <i class="ri-arrow-right-s-line"></i></span><a href="#">Airtime</a></div>
        </div>
    </div>
</div>

        <!-- end page title -->
<div style="padding:90px 15px 20px 15px">
    <!--    <h4 class="align-content-center text-center">Data Subscription</h4>-->





    <!--            <div class="box w3-card-4">-->

    <form action="{{ route('buyairtime') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-8">
                <div id="AirtimeNote" class="alert alert-danger" style="text-transform: uppercase;font-weight: bold;font-size: 23px;display: none;"></div>
                <div id="AirtimePanel">

                    <div id="div_id_network" class="form-group">
                        <label for="network" class=" requiredField">
                            Network<span class="asteriskField">*</span>
                        </label>
                        <div class="">
                            <select name="name" class="text-success form-control" required="">

                                <option value="m">MTN</option>
                                <option value="g">GLO</option>
                                <option value="a">AIRTEL</option>
                                <option value="9">9MOBILE</option>

                            </select>
                        </div>
                    </div>
                    <div id="div_id_network" class="form-group">
                        <label for="network" class=" requiredField">
                            Enter Amount<span class="asteriskField">*</span>
                        </label>
                        <div class="">
                            <input type="number" name="amount" min="100" max="4000" class="text-success form-control" required>
                        </div>
                    </div>
                    <div id="div_id_network" class="form-group">
                        <label for="network" class=" requiredField">
                            Enter Phone Number<span class="asteriskField">*</span>
                        </label>
                        <div class="">
                            <input type="number" name="number" minlength="11" class="text-success form-control" required>
                        </div>
                    </div>
                    <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">
                    <br>
                    <button type="submit" class=" btn" style="color: white;background-color: #28a745" id="btnsubmit"> Purchase Now<span class="load loading"></span></button>
                    <script>
                        const btns = document.querySelectorAll('button');
                        btns.forEach((items)=>{
                            items.addEventListener('click',(evt)=>{
                                evt.target.classList.add('activeLoading');
                            })
                        })
                    </script>
                </div>
            </div>
            <div class="col-sm-4 ">
                <br>
                <center> <h6>Codes for Airtime Balance: </h6></center>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary">MTN Airtime VTU    <span id="RightT"> *556#  </span></li>

                    <li class="list-group-item list-group-item-success"> 9mobile Airtime VTU   *232# </li>
                    <li class="list-group-item list-group-item-action"> Airtel Airtime VTU   *123# </li>
                    <li class="list-group-item list-group-item-info"> Glo Airtime VTU #124#. </li>
                </ul>
                <br>

                <style>
                    img {
                        max-width: 100%;
                        height: auto;
                    }
                </style>
{{--                <div class="card-body">--}}
{{--                    <div class="center">--}}
{{--                        <img    src="{{asset('df.jpeg')}}" alt="#" />--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </form>


</div>

@include('layouts.footer')
