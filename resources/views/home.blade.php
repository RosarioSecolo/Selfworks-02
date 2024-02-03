<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body class="bg-light ">
<span class="d-inline-flex p-2"><a href="{{route('about_me')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Chi sono</a></span>
<span class="d-inline-flex p-2"><a href="{{route('contact')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Contatti</a></span>
<span class="d-inline-flex p-2"><a href="{{route('articles')}}" class="link-primay link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Articoli</a></span>
<!--<span><a href="{{route('home')}}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a></span>
<p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info link</a></p>
<p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Light link</a></p>
<p><a href="#" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dark link</a></p>
<p><a href="#" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis link</a></p>
-->    

    
    
    
    


    <h1>Benvenuto {{$nome}} {{$cognome}}!<h2>
</body>
</html>