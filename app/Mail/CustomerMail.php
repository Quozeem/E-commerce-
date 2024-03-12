<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
       $message = 'Verification';
         $email=  $request->email;
        $data_mail = ['name' => $request->name,'rand'=>$token];
     
        Mail::send('email.verification', $data_mail, function ($message) use ($email) {
    $message->to($email);
    $message->subject('Email Verification');
});
    <a href='https://squaremart.azj.wbp.mybluehost.me/api/mailverification?token='.<?php echo $rand ?>.<?php echo $name ?> >VERIFY EMAIL</a>
    public function __construct()
    {
        //
    }

  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }

     
}
