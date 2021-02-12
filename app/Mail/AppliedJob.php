<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppliedJob extends Mailable
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

        return $this->view('mail.applied_job_employee')->with([
            'title' => $this->profile->title,
            'first_name' => $this->profile->first_name,
            'last_name' => $this->profile->last_name,
            'job_title'=>$this->jobDetails->job_title,
            'job_salary'=>$this->jobDetails->job_salary,
        ]);
    }
}
