@extends('admin-panel/layouts.app')


@section('content')


      


                    <h2>Все зписи</h2>

<br>
<table width="1000px">
<tr>
<th>Категория</th>
<th>Авторы</th>
    <th>Книги</th>

    <td>ID</td>
    <td>EDIT</td>
    <td>DELETE</td>

    
</tr>
@foreach($post as $el)

  <tr>
    <td>{{ $el->id_category }}</td>  
    <td>{{ $el->name }}</td>
    <td>{{ $el->topic }}</td>
    <td>{{ $el->id }}</td>
    

    <td><a href="{{ route('Uppost', $el->id )}}">EDIT</a></td>
    <td><a href="{{ route('PostDelete', $el->id )}}">DELETE</a></td>
 
    
    <tr>

</tr>

  </tr>
  @endforeach
</table>


@endsection








