@extends('locations.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Edit</h3>
      </div>
    </div>
  </div>

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>nah </strong> There were some problems with your input.<br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>

  @endif

  {!! Form::model($location, ['method'=>'PATCH','route'=>['locations.update', $location->id]])!!}
    @include('locations.form')
  {!! Form::close() !!}

@endsection
</div>
