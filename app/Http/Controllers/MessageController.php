<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
  use CRUDBooster;

class MessageController extends Controller
{
    // Function save contact form in database with Id advert and return back
  public function addMessage(Request $request, $Titre, $user)
  {
    if(!empty($request->Descrition) OR !empty($request->Email)){
      $Message= new Message;
      $Message->fk_User= $user;
      $Message->Titre= $Titre;
      $Message->Description= $request->Description;
      $Message->Email= $request->Email;
      $Message->save();
       // return redirect('/view/detail/$id');
      $config['content'] = "Vous avez un nouveau message";
      $config['to'] = CRUDBooster::adminPath('Message');
      $config['id_cms_users'] = [$user]; 
      CRUDBooster::sendNotification($config);

      return back();      
    }else{

    return back();
    }
  }
}
