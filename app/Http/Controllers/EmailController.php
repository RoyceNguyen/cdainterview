<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmailRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmailController extends Controller
{
    public function send(SendEmailRequest $request) {
        $data = $request->validated();
        $company = Company::first();
        $transport = (new \Swift_SmtpTransport($company->email_host, $company->email_port))
            ->setUsername($company->email_username)
            ->setPassword($company->email_password);

        $mailer = new \Swift_Mailer($transport);

        $mail = (new \Swift_Message('New Email From - ' . $data['name']))
            ->setFrom([$data['email'] => $data['name']])
            ->setTo($company->email)
            ->setBody($data['message']);

        $result = $mailer->send($mail);

        return redirect()->route('contact-us');
    }
}
