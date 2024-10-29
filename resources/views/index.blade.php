@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-breadcrumb title="Sliced" pagetitle="Dashboard" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
       
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Chart Js -->
    <script src="{{ URL::asset('build/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('build/js/appexchart-app.js') }}"></script>
@endsection
