<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Hotel Reservation</title>
    <style>
h3 {
  text-align: center;
}
</style>
</head>
<body>
    <h3>Room Data</h3>
    <table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Room</th>
      <th scope="col">Description</th>
      <th scope="col">Capacity</th>
      <th scope="col">dateFrom</th>
      <th scope="col">dateTo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->id }}</th>
      <td>{{ $customer->roomID }}</td>
      <td>{{ $customer->roomDescription }}</td>
      <td>{{ $customer->roomCapacity }}</td>
      <td>{{ $customer->dateFrom }}</td>
      <td>{{ $customer->dateTo }}</td>
      <td><button type="button" class="btn btn-primary">Edit</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
      
    </tr>
       @endforeach
  </tbody>
</table>
</body>
</html>
   
 
      

