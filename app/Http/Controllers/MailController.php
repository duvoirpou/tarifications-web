<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        return view('mail');
    }
    public function sendMail()
    {
        // Création d'un nouvel email
        Mail::send('emails.welcome', ['name' => "John Doe"], function ($message) {
            $message->to("assakoprecieux@gmail.com")->subject('Bienvenue sur notre site');
        });

        // Affichage d'un message de confirmation
        //return response()->json('Email envoyé avec succès');
        return back()->with('success', 'Email envoyé avec succès');
    }
public function sendEmail(MailerInterface $mailer)
    {
        // Création d'un nouvel email
        $email = (new Email())
            ->from('votre_adresse_email@exemple.com')
            ->to('destinataire_email@exemple.com')
            ->subject('Ceci est un email de test')
            ->text('Ceci est le contenu de l\'email de test');

        // Envoi de l'email
        $mailer->send($email);

        // Affichage d'un message de confirmation
        //return response()->json('Email envoyé avec succès');
        return back()->with('success', 'Email envoyé avec succès');
    }

    public function sendEmailWithAttachment(MailerInterface $mailer)
    {
        // Création d'un nouvel email
        $email = (new Email())
            ->from('votre_adresse_email@exemple.com')
            ->to('destinataire_email@exemple.com')
            ->subject('Ceci est un email de test avec pièce jointe')
            ->text('Ceci est le contenu de l\'email de test')
            ->attachFromPath('/path/to/file.pdf');

        // Envoi de l'email
        $mailer->send($email);

        // Affichage d'un message de confirmation
        return response()->json('Email envoyé avec succès');
    }
}
