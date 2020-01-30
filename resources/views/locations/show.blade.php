@extends('locations.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
  <h3>Show Info</h3> <a class="btn btn-xs btn-primary" href="{{ route('locations.index') }}">back</a>
      </div>
    </div>
  </div>

<div class="row">
<div class="col-xs-12">
  <div class="form-group">
    <strong>Name:</strong>
    {{ $location->name }}
</div>



<div class="col-xs-12">
  <div class="form-group">
    <strong>Location:</strong>
    {{ $location->location }}
</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Town:</strong>
    {{ $location->town }}
</div>
</div>

@endsection
</div>
