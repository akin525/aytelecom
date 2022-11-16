@include('layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Purchases</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Purchases</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>
                <!--                            My Invoice</h3>-->
        </div>
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <div class="card">
                        <div class="card-body">
                            <h3>Transactions</h3>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Username</th>
                                        <th>Plan</th>
                                        <th>Amount</th>
                                        <th>Phone No</th>
                                        <th>Payment_Ref</th>
                                        <th>Token</th>
                                        <!--                                                    <th>Action</th>-->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bill as $re)
                                        <tr>
                                            <td>{{$re->date}}</td>
                                            <td>{{$re->username}}</td>
                                            <td>{{$re->plan}}</td>
                                            <td>{{$re->amount}}</td>
                                            <td>{{$re->phone}}</td>
                                            <td>{{$re->refid}}</td>
                                            <td>{{$re->token}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- this page js -->
<script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('dist/js/pages/calendar/cal-init.js')}}"></script>
<script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

@include('layouts.footer')
