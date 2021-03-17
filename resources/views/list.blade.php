<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>parco macchine</title>
  </head>
  <body>

<h1>database creato e importato da php my admin con una lista di macchine e loro proprietà </h1>
@foreach ($cars as $car)

<div>
  <br>
  <span><strong>numero:</strong>{{$car -> id}}</span>
  <span><strong>nome:</strong>{{$car -> name}}</span>
  <span><strong>modello:</strong>{{$car -> model}}</span>
  <span><strong>potenza:</strong>{{$car -> power}}</span>
 </div>


@endforeach
</body>
</html>
