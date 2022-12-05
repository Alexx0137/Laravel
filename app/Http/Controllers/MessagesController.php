<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);

        return 'Datos validados';
    }
}
