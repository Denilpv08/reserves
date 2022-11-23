<!-- Access route -->
@extends('layouts/app')
<!--Page title -->
@section('title', 'Library')
<!-- Page content -->
@section('content')
<div class="d-grid gap-2 d-md-block">
    <a class="btn btn-primary" 
    type="button" 
    href="{{ route('books.index') }}">{{ __('Reserves') }}</a>
  </div>
</a>
    
    <h1 class="text-5xl text-center pt-24">Welcome</h1>

@endsection