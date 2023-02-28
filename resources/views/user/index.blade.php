<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>User</title>

    <style>
h3 {
  text-align: center;
}
</style>
</head>
<body>
    <h3>User Data</h3>

    
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">email</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->lastName }}</td>
      <td>{{ $user->firstName }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->contactNumber }}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
       @endforeach
  </tbody>
</table>
</body>
</html>
   
 
      

