<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PDFController extends Controller
{
    public function sendEmail($email)
    {
        // Generate PDF
        $data = ['name' => 'John Doe', 'email' => $email]; // Sample data
        $pdf = PDF::loadView('pdf.template', $data);

        // Save it locally in storage folder
        $pdf->save(storage_path('app/public/report.pdf'));

        // Create instance of PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@example.com';
            $mail->Password = 'your-password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email, 'User Name'); // Add a recipient

            // Attachments
            $mail->addAttachment(storage_path('app/public/report.pdf')); // Add attachments

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Here is your PDF';
            $mail->Body    = 'Hi, please find attached the PDF.';
            $mail->AltBody = 'Hi, please find attached the PDF.';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
