<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
@extends('admin-panel/layouts.app')


@section('content')


<body>
<table width="1000px">
<tr>
  <td>

  <h1>Добавить Категория</h1>
<form action="{{ route('addcategory') }}" method="post">
    @csrf

    <div class="form-group">

    <label for="subject">Тема сообщение</label>
<div class="form-group">
<input type="text"  name="title" placeholder="Рубрика" id="title" class="form-control">
</div>

<br>
<button type="submit" class="btn btn-dark">Добавить</button>
</form>

</td>
</tr>
</table>

@endsection
</body>
</html>