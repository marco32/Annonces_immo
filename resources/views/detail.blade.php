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
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
     <p class="navbar-text navbar-right">
       <a href="/register" class="navbar-link">Inscription</a>/<a href="/admin/login" class="navbar-link">Connexion</a>
     </p>
   </div>
 </nav>
 <main class="container">
  @foreach($view as $value)
  <div class="row">
    <div class="col-md-6">
      <h2>{{$value->Titre}}</h2>
      <p>{{$value->Desc_Types}} à <strong>{{$value->Cat}}</strong></p>
    
      <p>prix:{{$value->Tarif}}€
      <?php if($value->Cat == 'Location'){ 
          echo " par mois";
       } ?>
      </p>
      <p>Meublé : {{($value->Meuble)? 'oui': 'non'}}</p>
      <p>Etage : {{($value->Etage)? 'oui': 'non'}}</p>
      <p>adresse: {{$value->Numero}} {{$value->Rue}} {{$value->Code_postal}} {{$value->Ville}}</p>
      
    </div>
    <div class="col-md-6">
      
      <img src="../../{{$value->Photo}}" class="img-detail" alt="">
    </div>
  </div>




  @endforeach
</main>
</body>
</html>
