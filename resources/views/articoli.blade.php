<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Articoli</title>
</head>
<h1>Elenco di articoli disponibili:</h1>
<body class="bg-success-subtle ">
<span class="d-inline-flex p-2"><a href="{{route('home')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a></span>
<span class="d-inline-flex p-2"><a href="{{route('about_me')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Chi sono</a></span>
<span class="d-inline-flex p-2"><a href="{{route('contact')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contatti</a></span>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descrizione</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articoli as $id=>$articolo)
    <tr>
      <th scope="row">{{$articolo['title']}}</th>
      <td>{{$articolo['category']}}</td>
      <td><a href="{{route('article',$id)}}">{{route('article',$id)}}</a></td>
    </tr>
      @endforeach
  </tbody>
</table>

</body>
</html>