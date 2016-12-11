<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\UserActivations;

class Activation extends Mailable
{
    use Queueable, SerializesModels;

     /**
     * The order instance.
     *
     * @var UserActivations
     */
    protected $user_activations;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(UserActivations $user_activations)
    {
        $this->user_activations = $user_activations;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('orb950@outlook.fr')
                    ->view('mail.activation')
                    ->with(['token' => $this->user_activations->token]);
    }
}
