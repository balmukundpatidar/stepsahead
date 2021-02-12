<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')->with([
            //'title' => $this->request->title,
            'first_name' => $this->request->first_name,
            //'last_name' => $this->request->last_name,
            'mobile'=>$this->request->number,
            'email'=>$this->request->email,
            'enquiry'=>$this->request->enquiry,
            'messageLines'=>$this->request->comment,
        ]);    }
}
