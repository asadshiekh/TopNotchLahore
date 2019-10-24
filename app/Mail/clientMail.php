<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class clientMail extends Mailable
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
        // return $this->markdown('ClientSite/clientviewemail');

         return $this->from('topnotchlahore@gmail.com','Top Notch Management')->to($request->rev_email,'to '.$request->rev_name)->subject('Resveration')->markdown('ClientSite/clientviewemail')->with([
                        'UserName' => $request->rev_name,
                        'UserEmail' => $request->rev_email,
                    ]);;
    }
}
