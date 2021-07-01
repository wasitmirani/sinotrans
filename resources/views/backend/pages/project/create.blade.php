@extends('layouts.backend.master')
@push('styles')
    <!-- Summernote -->
    <link href="{{asset('/vendor/summernote/summernote.css')}}" rel="stylesheet">
@endpush
@section('content')


@livewire('create-project')



@endsection
@push('scripts')
        <!-- Summernote -->
        <script src="{{asset('/vendor/summernote/js/summernote.min.js')}}"></script>
        <!-- Summernote init -->
        <script src="{{asset('/js/plugins-init/summernote-init.js')}}"></script>

@endpush
