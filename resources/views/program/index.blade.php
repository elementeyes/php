@extends('program.master')
  <body style="background-image: url('{{asset('images/2.jpg') }}'); background-size: cover;">
<div class="container">
@section('content')
<div class="row">
  <div class="container">
<div class="col-lg-12"><center>
  <h3 style="color: white; font-family:MV Boli;">Our Program</h3></center>
</div>
</div>
</div><br><br>
<div class="container" >
<input class="form-control" id="myInput" type="text" placeholder="Search.." style="max-width:200px;"><br>
<table class="table table-striped table-responsive-md ">
<thead style="color: white; font-family:MV Boli;">
<tr>

<th>Play</th>
<th>Date</th>
<th>Location</th>
<th>Tickets</th>

</tr>
</thead>
 <tbody id="myTable" style="color: white; font-family:MV Boli;">
@foreach ($posts as $post)
  <tr>

    <td>{{ $post->name }}</td>
    <td>{{ $post->date }}</td>
    <td>{{ $post->location }}</td>
    <td>{{ $post->tickets }}</td>

  </tr>

@endforeach
</tbody>
</table>
</div>
<div class="container" >
{!! $posts->links() !!}
</div>

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
</div>
</body>
