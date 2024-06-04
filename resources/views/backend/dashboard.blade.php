@extends('layouts.backend_master')


@section('content')
@endsection


@push('scripts')
<script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
<script src="{{ asset('assets') }}/js/pages/dashboard-default.js"></script>
@endpush