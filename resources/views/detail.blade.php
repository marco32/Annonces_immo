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
 <h4>{{$error}}</h4>
  @foreach($view as $value)
  <div class="row">
    <div class="col-md-6">
      <h2>{{$value->Titre}}</h2>
      <table class="table table-hover">
        <tr>
          <td>
            adresse: {{$value->Numero}} {{$value->Rue}} {{$value->Code_postal}} {{$value->Ville}}
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            {{$value->Desc_Types}} à <strong>{{$value->Cat}}</strong>          
          </td>
          <td></td>
          <td>
            prix:{{$value->Tarif}}€
            <?php if($value->Cat == 'Location'){ 
            echo " par mois";
          } ?>          
        </td>
      </tr>
      <tr>
        <td>
          Etage : {{($value->Etage)? 'oui': 'non'}}      
        </td>
        <td>
          Jardin : {{($value->Jardin)? 'oui': 'non'}}
        </td>
        <td>
          Meublé : {{($value->Meuble)? 'oui': 'non'}}            
        </td>
      </tr>
      <tr>
        <td>
          Surface : {{$value->Surface}} m2
        </td>
        <td>
          Nombre de pièce: {{$value->Nb_pieces}}
        </td>
        <td>
          Nombre de chambre: {{$value->Nb_chambres}}
        </td>
      </tr>
      <tr>
        <td>
          Classe GES: {{$value->Ges}}    
        </td>
        <td></td>
        <td>
          Classe Energetique: {{$value->Energie}}
        </td>
      </tr>
      
    </table>
<div>
 Description: {{$value->Desc}}
</div>
  </div>
  <div class="col-md-6">

    <img src="../../{{$value->Photo}}" class="img-detail" alt="">
  </div>
</div>
<div>
  <form class="form-horizontal" action="/annonce/message/{{$value->Titre}}/{{$value->fk_user}}" method="get">
  <fieldset>
         {{ csrf_field() }}

  <legend>Formulaire de contact</legend>
    <div class="form-group">
    <label for="email">Email:</label>
    <input class="form-control" type="text" id="email" name="Email">  
    </div>
    <div class="form-group">
      <label for="message">Votre message:</label>
      <textarea class="form-control" name="Description" id="message" cols="30" rows="10"></textarea> 
    </div>
    <div>
      <button class="btn btn-success">Envoyer</button>
    </div>
  </fieldset>
  </form>
</div>


@endforeach
</main>
</body>
</html>
