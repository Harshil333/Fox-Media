@extends('clients.template')
@section('sub_content')
    <div class="container">
        <div class="row">
            <a href="/strategy/new_inside" class="btn btn-primary" style="margin:5px;margin-left:15px;">Add New Strategy</a>
        </div>
        @if(count($strategies)>0)
            
            @foreach ($strategies as $strategy)
                <a href="{{url('/strategy/show/'.$strategy->id)}}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5 class="card-title h5-responsive">For {{$strategy->company_name}}</h5>
                                    <h6 class="card-text h6-responsive">Budget: &#8377{{$strategy->budget}}</h6>
                                </div>
                                <div class="col-sm-2">
                                    @if ($strategy->status=='In-process')
                                        <h5 class="card-title h5-responsive" style="color:yellow">In-process</h5>
                                    @else
                                        <h5 class="card-title h5-responsive" style="color:green">Approved</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            {{-- Keep all cards clickable, on click, redirect to detail page. --}}
                {{-- If approved, don't show all responses,only show the approved response --}}
                {{-- If not approved, show all responses with approved and reject button --}}
        @else
            <div class="jumbotron">
                <h3 class="h3-responsive text-center font-weight-bold">No Strategies yet!</h3>
            </div>
        @endif
    </div>    
@endsection