@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @php
                    $GLOBALS['login']=true;
                    @endphp
                    <a class="link" href="{{ route('homepage') }}">Continue</a>
                    <meta http-equiv="refresh" content="2; url={{ route('homepage') }}" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
