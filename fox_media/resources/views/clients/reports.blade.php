@extends('clients.template')
@section('sub_content')
    <div class="container">
        @if (count($reports)>0)
            @foreach ($reports as $report)
                <div class="row">
                    <h4 class='h4-responsive'>Your Campaign with {{$report->agency_name}}</h4>
                    <div class="col-sm-6">
                        <h5 class="h5-responsive">Followers yesterday: {{$report->followers_before}} followers</h5>
                        <h5 class="h5-responsive">Followers at start: {{$report->followers_at_start}} followers</h5>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="h5-responsive">Followers today: {{$report->followers_now}} followers</h5>
                        <h5 class="h5-responsive">Followers at the end: {{$report->followers_before}} followers</h5>
                    </div>
                </div>
                <hr>
            @endforeach
        @else
            <div class="jumbotron">
                <h3 class="text-center h3-responsive font-weight-bold">Oops, it seems you haven't started any campaign yet or the agency hasn't submitted the reports!</h3>
            </div>
        @endif
    </div>
@endsection