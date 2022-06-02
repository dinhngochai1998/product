<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $product)
    {
        $this->order = $order;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): SendMail
    {
        $product = collect($this->product);
        $data = array_merge($this->order, $product->toArray());
        return $this->from('haidn@toprate.io')
                    ->view('product.send-mail')
                    ->with('data', $data);
    }
}
