<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApplied extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_details,$profile,$jobDetails)
    {
        $this->user_details = $user_details;
        $this->profile = $profile;
        $this->jobDetails = $jobDetails;


    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.applied_job_employer')->with([
            'user_name'=>$this->user_details->user_name,
            'title' => $this->profile->title,
            'first_name' => $this->profile->first_name,
            'last_name' => $this->profile->last_name,
            'jobDetails'=>$this->jobDetails
        ]);    }
}
