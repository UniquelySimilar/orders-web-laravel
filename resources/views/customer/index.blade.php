<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Customers</title>
  <link href="css/app.css" rel="stylesheet" >
  <!-- In production 'orders.css' should be imported into app.scss to be included in 'app.css' -->
  <link href="css/orders.css" rel="stylesheet" >
</head>

<body>
  <div class="container">
    <h3 class="page-title">Customers</h3>
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>LAST NAME</th>
          <th>FIRST NAME</th>
          <th>CITY</th>
          <th>STATE</th>
        </tr>
      </thead>
      <tbody>
        @foreach($customers as $customer)
        <tr>
          <td>{{ $customer->last_name }}</td>
          <td>{{ $customer->first_name }}</td>
          <td>{{ $customer->city }}</td>
          <td>{{ $customer->state }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>