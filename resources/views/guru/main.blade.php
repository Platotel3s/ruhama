@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Pusat Role {{ Auth::user()->role }}</h5>
                    </div>
                    <div class="card-body">
                        <p>Akun guru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection