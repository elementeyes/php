@extends('posts.master')

@section('content')
<div class="container">

<div class="row">
<div class="col-lg-12">
  <h3>Program/Admin</h3>
</div>
</div>
<br>
<div class="row">
  <div class="col-sm-12">
    <div class="pull-right">
    <a class="btn btn-xs btn-success" href="{{ route('posts.create') }}">Create New</a>
  </div>
  </div>
  </div>
<br>

@if ($message = Session::get('success'))
<div class ="alert alert-success">
<p>{{ $message }}</p>
</div>

@endif

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table class="table table-bordered">
  <thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Date</th>
<th>Locaton</th>
<th>tickets</th>
<th width="300px">Actions</th>
</tr>
</thead>
@foreach ($posts as $post)
<tbody id="myTable">
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $post->name }}</td>
    <td>{{ $post->date }}</td>
    <td>{{ $post->location }}</td>
    <td>{{ $post->tickets }}</td>
    <td>
           <a class="btn btn-xs btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
           <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>

 {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy',$post->id], 'style'=> 'display:inline']) !!}
{!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}
    </td>
  </tr>

@endforeach
</tbody>
</table>

{!! $posts->links() !!}

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@endsection
