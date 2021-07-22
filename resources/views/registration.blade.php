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
  <div class="col-6" style="align-content: center; padding-left:300px;">
    <div class="">
      <h3> Registration Form </h3>
      <br>
<form action ="/register" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name ="sname" required="" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text"  name ="age"class="form-control" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="Gender">Gender</label>&nbsp;&nbsp;&nbsp;
    <input type="radio" checked=""  name="gender" value="M">Male
    <input type="radio"  name="gender" value="F">Female

  </div>
  <div class="form-group">
    <label for="teacher">Select Teacher:</label>
<select id="teacher" name="teacher">
  <option value="">--Select Option--</option>
  <option value="Max">Max</option>
  <option value="Katie">Katie</option>
  <option value="Susan">Susan</option>
  <option value="Anitha">Anitha</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>

