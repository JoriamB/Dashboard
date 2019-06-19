
@extends('coreui::master')

@push('css')
<link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
@endpush


@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    @stop

@section('body')
    <p>Welcome to this awesome web app! Made with Laravel 5.6 and Vue.js 2</p>
    <div id="app">

</div>
@endsection

@push('js')
<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
@endpush