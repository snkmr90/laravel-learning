@extends('layouts.master')
@section('title')
{{$title}}
@stop
@section('sidebar')
    <p>This is my sidebar content.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop

@section('scripts')
<script src="{{ asset('js/appnew.js') }}"></script>
   <script>
    $(document).ready(function(){
        alert('test');
    });
   </script>
@stop