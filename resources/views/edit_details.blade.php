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
        @foreach($data as $item)
        <form action="{{url('update_detail/'.$item->id)}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
        @endforeach
     <div class="form-group">
    <label for="name">Name</label>
<select class="form-control" value="{{$item->name}}" name="name">
<option value="">Please Select</option>
@foreach($data as $item)
 <option value="{{$item->name}}">{{ $item->name }}</option>
 @endforeach
 </select>  
</div>

  <div class="form-group">
    <label for="term">Term</label>
<div class="form-group">
<select id="term" name="term" class="form-control">
  <option value="">--Select Term--</option>
  <option value="One">One</option>
  <option value="Two">Two</option>
</select>
  </div>
  
  <div class="form-group">
   
    <label for="term">Subject</label><ul>
    <li><label for="term">Maths</label>
    <input type="text" name ="maths"class="form-control" value="{{$student->maths}}" ></li>
    <li><label for="term">Science</label>
    <input type="text" name ="science"class="form-control" value="{{$student->science}}" ></li>
    <li><label for="term">History</label>
    <input type="text" name ="history"class="form-control" value="{{$student->history}}" ></li>
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

