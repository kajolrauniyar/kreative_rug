<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Design extends Mailable 
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($this->data['email']);
        $this->subject('!! Request for custom rug design !!');
        $this->to('mail@kreativerugs.com');
        $this->replyTo($this->data['email']);
        $this->attach($this->data['upload']->getRealPath(),
        [
            'as' => $this->data['upload']->getClientOriginalName(),
            'mime' => $this->data['upload']->getClientMimeType(),
        ]);

        return $this->markdown('emails.design');       
    }
}
