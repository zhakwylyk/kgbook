@extends('admin-panel/layouts.app')


@section('content')




<h2>Таблица пользователей</h2>

<table width="1000px">
<tr>
    <th>USERNAME</th>
    <th>email</th>
    <th>id</th>
    <td>EDIT</td>
    <td>DELETE</td>
  </tr>
@foreach($user as $el)

  <tr>
    <td>{{ $el->name }}</td>
    <td>{{ $el->email }}</td>
    <td>{{ $el->id }}</td>

    
    <td><a href="{{ route('UserUp', $el->id )}}">EDIT</a></td>
    <td><a href="{{ route('userDelete', $el->id )}}">DELETE</a></td>
    <tr>

</tr>

  </tr>
  @endforeach
</table>

@endsection



