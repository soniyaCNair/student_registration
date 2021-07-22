<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student Managmet</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row searched-item cart-list-devider col-12">
<div class="col-12">
    </div> 
    <div class="col-12">
     <div class="row">
                <div class="col-12">
                <h3 style="text-align: center;"> Student Detail</h3>
                <div class="table-main table-responsive">
                <table class="table table-bordered">
                <thead class="">
			<th>ID</th>
			<th>Name</th>
			<th>Maths</th>
			<th>Science</th>
			<th>History</th>
			<th>Term</th>
			<th>created On</th>
			<th>Action</th>
		</thead>
		@foreach($data as $item)
		<tbody>
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->stu_name}}</td>
				<td>{{$item->maths}}</td>
				<td>{{$item->science}}</td>
				<td>{{$item->history}}</td>
				<td>{{$item->term}}</td>
				<td>{{$item->created_at}}</td>
				<td>
                                  
                                  <a href="{{url('edit_detail/'.$item->id)}}" class="badge badge-pill btn btn-primary px-3 py-2">Edit</a>
                                  <a href="{{url('delete/'.$item->id)}}" class="badge badge-pill btn btn-danger px-3 py-2">Delete</a>

                                </td>
			</tr>


		</tbody>
		@endforeach
	</table>
</div>
</div>
</div>


</body>
</html>