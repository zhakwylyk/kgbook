@extends('admin-panel/layouts.app')


@section('content')


      


                    <h2>Все категории</h2>

<br>
<table width="1000px">
<tr>
<th>Категория</th>

    <td>ID</td>
    <td>EDIT</td>
    <td>DELETE</td>

    
</tr>
@foreach($category as $el)

  <tr>
    <td>{{ $el->title }}</td>
    <td>{{ $el->id }}</td>
    <td><a href="{{ route('СategoryDelete', $el->id )}}">DELETE</a></td>

 
    
    <tr>

</tr>

  </tr>
  @endforeach
</table>


@endsection








