@extends('clients.template')
@section('sub_content')
    <div class="container">
        @if (count($campaigns)>0)

            {{-- Display all active campaigns as a list of cards in a jumbotron--}}
            <div class="jumbotron">
                <div class="row">
                    @foreach ($campaigns as $camp)
                        @if ($camp->status=='Active')
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title h5-responsive">Agency: {{$camp->agency_name}}</h5>
                                    <h6 class="h6-responsive">&#8377 {{$camp->cost}}</h6>
                                    <p class="card-text">{{$camp->strategy}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Display all past campaigns as a list of horizontal cards--}}
            @foreach ($campaigns as $camp)
                @if($camp->status=="Completed")
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5 class="card-title h5-responsive">Agency: {{$camp->agency_name}}</h5>
                                    <h6 class="card-text h6-responsive"> &#8377{{$camp->cost}}</h6>
                                </div>
                                <div class="col-sm-2">
                                    <h6 class="h6-responsive">&#8377 {{$camp->cost}}</h6>
                                    <h6 class="h6-responsive" style="color: green">Completed</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            
        @else
            <div class="jumbotron">
                <h3 class="h3-responsive text-center font-weight-bold">No Campaigns yet!</h3>
            </div>
        @endif
    </div>    
@endsection