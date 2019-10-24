<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class ownerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        // return $this->markdown('ClientSite/ownerviewemail');
        return $this->from('topnotchlahore@gmail.com','Top Notch Management')->to('topnotchlahore@gmail.com','to '.'topnotch')->subject('Resveration')->markdown('ClientSite/ownerviewemail')->with([
                        'UserName' => $request->rev_name,
                        'UserEmail' => $request->rev_email,
                        'UserPhone' => $request->rev_phone,
                        'Userdate' => $request->date,
                        'Usertime' => $request->restime,
                    
                    ]);
    }
}
