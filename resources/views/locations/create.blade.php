@extends('locations.master')


@section('content')
<div class="container">
  <div class="row">
<div class="col-lg-12">
<div class="pull-left">
<h3>Add New</h3>
</div>
</div>
  </div>


  @if(count($errors) > 0)
<div class="alert alert-danger">
<strong>nah</strong> bad input. <br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
  @endif

  {!! Form::open(['route' => 'locations.store', 'method' => 'LOCATION']) !!}
@include('locations.form')
{!! Form::close() !!}


@endsection
</div>
