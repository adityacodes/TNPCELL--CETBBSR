@extends('user')

@section('title', 'TNP SETTINGS')




@section('content')

    <div class="row">
        <div class="card">
            @include('partials._tnpsettingsnav')
            
                <div id="my-tab-content" class="tab-content text-center bg-info">
                    <div class="tab-pane active" id="home">
                        <p>
                            All the setting will be documented here.
                        </p>
                    </div>
                </div>
        </div>
    </div>

@endsection