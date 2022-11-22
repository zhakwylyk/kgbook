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
  
  <h1>Добавить Тему</h1>
<form action="{{ route('addpost') }}" method="post">
    @csrf

    <div class="form-group">

    <label for="subject">Тема сообщение</label>
<div class="form-group">
<input type="text"  name="name" placeholder="Автор" id="name" class="form-control">
</div>

<div class="form-group">
<input type="text" name="topic" placeholder="Тема книги" id="topic" class="form-control">
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1">Категория</label>
    <select class="form-control" id="id_category" id="exampleFormControlSelect1">
       <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>


<div class="form-group">
    <textarea class="form-control" placeholder="Описания" type="description" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
</form>


<div class="form-group">
    <textarea class="form-control" placeholder="Текст" type="text" name="text" id="exampleFormControlTextarea1" rows="15"></textarea>
  </div>
</form>



<br>
<button type="submit" class="btn btn-dark">Опубликовать</button>
</form>

</td>
</tr>
</table>

@endsection
</body>
</html>