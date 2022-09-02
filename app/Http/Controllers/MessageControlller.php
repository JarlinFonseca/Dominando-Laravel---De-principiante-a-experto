<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;



class MessageControlller extends Controller
{

    /* PRIMERA FORMA */
/*     public function store(Request $request){
        return 'Los datos del formulario son: '.
        '<ul>'
        .'<li>'. $request->get('text') .'</li>'
        .'<li>'. $request->get('subject') .'</li>'
        .'<li>'. $request->get('email') .'</li>'
        .'<li>'. $request->get('content') .'</li>'.
        '</ul>';
    } */

    /* SEGUNDA FORMA  */
 /*    public function store(){
        return 'Los datos del formulario son: '.
        '<ul>'
        .'<li>'. request('text') .'</li>'
        .'<li>'. request('subject') .'</li>'
        .'<li>'. request('email') .'</li>'
        .'<li>'. request('content') .'</li>'.
        '</ul>';
    } */

    public function store(){

       // return request();

        $msg= request()->validate(
            [
                'name' => 'required',
                'email' =>'required|email', /* ['required', 'email'] */
                'subject' => 'required',
                'content' => 'required|min:12'
            ], [

                'name.required' => __('I need your name')
            ]);

            Mail::to($msg['email'])->queue(new MessageReceived($msg));
            //Mail::to('jarlinandres5000@gmail.com')->queue(new MessageReceived($msg));

            return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.'); 

    }

}
