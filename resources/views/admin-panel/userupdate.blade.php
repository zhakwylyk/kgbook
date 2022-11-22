
<!DOCTYPE html>
<html>
<head>
@extends('admin-panel/layouts.app')


@section('content')

<style>

    
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



 

    
 

   


   






<form action="{{ route('UserUp', $user->id) }}" method="post">
@csrf
<h2>Edit Тему</h2>

<table>
<tr>
    <th>USERNAME</th>
    <th>email</th>
    <th>Обновить</th>
   
  </tr>

  <tr>
    <td><input type="text" name="name" value="{{$user->name}}" placeholder="name" id="name"></td>
    <td><input type="text" name="email" value="{{$user->email}}" placeholder="email" id="email"></td>
   
    
    <td><button type="submit" class="btn btn-danger">Жаныртуу</button></td>
    <tr>

</tr>

  </tr>

</table>

</form>

@endsection
</body>
</html>







