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
    <div class="container">

<h1>Изменить Тему</h1>
<form action="{{ route('Uppost', $post->id) }}" method="post">
    @csrf

    <div class="form-group">

    <label for="subject">Тема сообщение</label>
<div class="form-group">
<input type="text" value="{{$post->name}}" name="name" placeholder="name" id="name" class="form-control">
</div>

<div class="form-group">
<input type="text" value="{{$post->topic}}" name="topic" placeholder="topic" id="topic" class="form-control">
</div>

<div class="form-group">
    <textarea class="form-control" value="{{$post->description}}" placeholder="Описания" type="description" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
</form>



<div class="form-group">
    <textarea class="form-control" type="text" value="{{$post->text}}" name="text" id="exampleFormControlTextarea1" rows="15"></textarea>
  </div>
</form>


<br>
<button type="submit" class="btn btn-dark">Опубликовать</button>
</form>

</div>
@endsection
</body>
</html>