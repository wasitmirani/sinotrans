@extends('layouts.backend.master')
@push('styles')
<link href="{{asset('/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endpush
@section('content')

@livewire('projects')


@endsection
@push('scripts')
   <!-- Datatable -->
   <script src="{{asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('/js/plugins-init/datatables.init.js')}}"></script>
@endpush
