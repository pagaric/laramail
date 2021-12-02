<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    /**
     * Affichage du formulaire
     *
     * @return void
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * On récupère le contenu du formulaire et on envoie le mail
     *
     * @param Request $req
     * @return void
     */
    public function sendMail(Request $req)
    {
        $data = $req->all();

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new TestMail($data));

        return view('bar');
    }
}
