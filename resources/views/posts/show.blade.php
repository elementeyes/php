@extends('posts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
  <h3>Show Info</h3> <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">back</a>
      </div>
    </div>
  </div>

<div class="row">
<div class="col-xs-12">
  <div class="form-group">
    <strong>Name:</strong>
    {{ $post->name }}
</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Date:</strong>
    {{ $post->date }}
</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Location:</strong>
    {{ $post->location }}
</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Tickets:</strong>
    {{ $post->tickets }}
</div>
</div>

@endsection
</div>
