<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Articolo</title>
</head>
<body>
<span class="d-inline-flex p-2"><a href="{{route('home')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a></span>
<span class="d-inline-flex p-2"><a href="{{route('about_me')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Chi sono</a></span>
<span class="d-inline-flex p-2"><a href="{{route('contact')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contatti</a></span>
<span class="d-inline-flex p-2"><a href="{{route('articles')}}" class="link-primay link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Articoli</a></span>
@if(array_key_exists($id,$articoli))
<h1>{{$articoli[$id]['title']}}</h1>
<h2>Categoria:<span class="btn btn-primary">{{$articoli[$id]['category']}}</span></h2>
<p>{{$articoli[$id]['description']}}</p>
@else
<h1>Nessun articolo disponibile</h1>
@endif
    
</body>
</html>