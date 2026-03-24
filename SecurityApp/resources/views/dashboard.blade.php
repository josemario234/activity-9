@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-5 text-center">
        <h1>Dashboard</h1>
        <p class="lead">Authenticated user dashboard. Only logged-in users can see this content.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-success">
                <div class="card-header">Welcome, {{ Auth::user()->name }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>@endsection
