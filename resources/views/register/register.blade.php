<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
    </head>
    <body>
      <nav class="navbar navbar-default navbar-static-top">
  <div class="container">
   <p class="navbar-text navbar-right"><a href="/admin/login" class="navbar-link">Connexion</a></p>
  </div>
</nav>
      <div class="container">
          <form action="/register/new" method="get">
  <div class="form-group">
    <label for="Name">Nom</label>
    <input type="text" class="form-control" id="Name" name="name" placeholder="Nom">
  </div>      
  <div class="form-group">
    <label for="Email">Adresse Email </label>
    <input type="email" class="form-control" id="Email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Valider</button>
</form>
      </div>
    </body>
</html>
