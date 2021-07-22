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
    <br><br>

<div class="row searched-item cart-list-devider col-12" style="padding-left:30%;">
<div class="col-12">
    </div> 
    <div class="col-6">
     <div class="row">
                <div class="col-12">
        <h3 style="text-align: center;"> Student Detail</h3>
        <br>
        <div class="card">
         <div class="card-body">
        <form action="{{url('update/'.$user->id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
     <div class="form-group">
     	<input type ="text"  class="form-control" name="sname" value ="{{$user->name}}" >
     </div>
     <div class="form-group">
     	<input type ="text" class="form-control" name="age" value ="{{$user->age}}">
     </div>
 <div class="form-group">
     	<input type ="radio"  name="gender" value="Male" {{ $user->gender == 'Male' ? 'checked' : ''}}>Male</option>
     	<input type ="radio"  name="gender" value="Female" {{ $user->gender == 'Female' ? 'checked' : ''}}>Female</option>
     </div> 
    <div class="form-group">
    	<select name="teacher" class="form-control">
    		<option value="Max">Max</option>
    		<option value="Katie">Katiet</option>
    		<option value="Susan">Susan</option>
    		<option value="Anitha">Anitha</option>
        </select>

     </div>
     <div class="form-group">
       <button type ="submit" class="btn btn-primary">Update</button>

     </div> 
        </div>
    </div>
</form>
</div>
</div>
</body>
</html>

