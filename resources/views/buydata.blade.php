@include('layouts.sidebar')
<div class="page-title">
    <div class="row align-items-center justify-content-between">
        <div class="col-xl-4">
            <div class="page-title-content">
                <h3>Preview</h3>
            </div>
        </div>
        <div class="col-auto">
            <div class="breadcrumbs"><a href="{{route('dashboard')}}">Home </a><span>
                    <i class="ri-arrow-right-s-line"></i></span><a href="#">Preview</a></div>
        </div>
    </div>
</div>

        <!-- end page title -->
<div class="row">
    <!--    <div class="card">-->
    <div class="card-body">
        <div class="module-head">
            <center><h3>
                    Buy Data</h3></center>
        </div>
        <center>
            <script>
                function myNewFunction(sel) {
                    // alert(sel.options[sel.selectedIndex].id);
                    document.getElementById("po").value = (sel.options[sel.selectedIndex].id);
                    document.getElementById("pk").value = (sel.options[sel.selectedIndex].text);
                }
            </script>
            <div class="btn-controls">
                <form action="{{ route('bill') }}" method="post">
                    @csrf
                    <label for="network" class=" requiredField">
                        Select Network from the Rectangular Box<span class="asteriskField">*</span>
                    </label>
                    <select  name="productid" class="text-success form-control" onChange="myNewFunction(this);" required="">
                        <option>-------</option>
                        @foreach($data as $datas)
                            <option value="{{$datas->id}}" id="{{$datas->tamount}}" >{{$datas->network}}{{$datas->plan}} || {{$datas->tamount}}
                            </option>
                        @endforeach

                    </select>
                    <br>
                    <label for="network" class=" requiredField">
                        Amount<span class="asteriskField">*</span>
                    </label>
                    <input name="amount" class="text-success form-control" value="" placeholder="Amount" id="po" readonly>
                    <br>
                    <input type="hidden" name="id" value="<?php echo rand(10000000, 999999999); ?>">

                    <label for="network" class=" requiredField">
                        Enter Phone no<span class="asteriskField">*</span>
                    </label>
                    <input type="number" name="number" class="form-control" required>
                    <br>
                    <button type="submit" class=" btn" style="color: white;background-color: #28a745">Buy Now<span class="load loading"></span></button>
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
