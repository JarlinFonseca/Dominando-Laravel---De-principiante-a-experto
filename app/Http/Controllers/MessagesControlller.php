<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesControlller extends Controller
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
    public function store(){
        return 'Los datos del formulario son: '.
        '<ul>'
        .'<li>'. request('text') .'</li>'
        .'<li>'. request('subject') .'</li>'
        .'<li>'. request('email') .'</li>'
        .'<li>'. request('content') .'</li>'.
        '</ul>';
    }

}
