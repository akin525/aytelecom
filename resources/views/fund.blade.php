@include('layouts.sidebar')
        <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <!--                                        <h4 class="font-weight-bold mb-0">--><?php //echo $name; ?><!--</h4>-->
            </div>
        </div>
        <!--                    <div class="col-xl-9 col-md-8">-->
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">

                </div>
            </div>
        </div>

        <!--        <div class="row">-->
        <!--            <div class="col-md-7 grid-margin stretch-card">-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Deposit history</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Amount</th>
                            <th>Amount Before</th>
                            <th>Amount After</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        @foreach($fund as $depo)
                            <tr>
                                <td>{{$depo['username']}}</td>
                                <td>{{$depo['amount']}}</td>
                                <td>{{$depo['iwallet']}}</td>
                                <td>{{$depo['fwallet']}}</td>
                                <td>{{$depo['date']}}</td>
                            </tr>
                        @endforeach
                    </table>
                    {{$fund->links()}}
                </div>
            </div>
        </div>
    </div>
