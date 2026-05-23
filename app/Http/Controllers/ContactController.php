<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function send(Request $request) {
         // Validación
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:30'],
            'project_type' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        // Enviar correo
        Mail::to('soporte@fcomtzdev.com.mx')
            ->send(new ContactMail($validated));

        // Regresar
        return back()->with(
            'success',
            'Mensaje enviado correctamente.'
        );
    }
}
