<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
  public function sender() {
    return $this->belongsTo('App\User', 'sender_id');
  }

  public function recipient() {
    return $this->belongsTo('App\User', 'recipient_id');
  }

  public function sendEmail() {
  	$message->save();
  	return redirect('home');
  }

  public function star() {
  	if ($message->is_starred) {
  		$message->is_starred == false;
  	} else {
  		$message->is_starred == true;
  	}
  }

}
