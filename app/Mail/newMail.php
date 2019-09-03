<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class newMail extends Mailable
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
    public function build()
    {
        return $this->from('asadshiekh9@gmail.com')->to('asadshiekh9@gmail.com')->subject('KHYBER PASS')->view('ClientSite/mail');

                // return $this->from('careerspoons@gmail.com','CareerSpoons')->to($request->y,'to '.$request->z)->subject('CareerSpoons')->markdown('admin_views/mail_views/reply_contact_us_admin')->with([
                //         'UserName' => $request->z,
                //         'UserEmail' => $request->y,
                //         'Reply' => $request->msg,
                //     ]);
    }
}
