<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::take(3)->get();
        return view('home', compact('projects'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contact::create($validated);

        // Obtener fecha y hora e IP
        $dateTime = Carbon::now()->format('d-m-Y H:i');
        $ip = $request->ip();

        // Enviar notificación por correo
        Mail::to('jaime.perez.penaloza@gmail.com')
            ->send(new ContactNotification($validated, $dateTime, $ip));

        return redirect()->to('/#contact')->with('success', 'Thanks for your message!');
    }
}

