<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class GasingEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdf;
    protected $userName;
    protected $userEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf, $userName, $userEmail)
    {
        $this->pdf = $pdf;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('mathwithgasing@gmail.com', 'Math With Gasing'),
            subject: 'Laporan Nilai Math With Gasing',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.main',
        );
    }

    public function build()
    {
        return $this->view('mail.main')
            ->subject('Laporan Nilai Math With Gasing')
            ->attachData($this->pdf->output(), 'laporan-nilai-' . $this->userName . '.pdf', [
                'mime' => 'application/pdf',
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
