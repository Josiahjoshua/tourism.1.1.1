@extends('layout.admin')

@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    Welcome {{\Illuminate\Support\Facades\Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
@endsection
