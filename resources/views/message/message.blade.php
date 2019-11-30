@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content-wrap">
        <div class="col-md-12">
            <div class="alert alert-danger">
                {{ $message }}
            </div>                            
        </div>
    </div>
</div>
@endsection

