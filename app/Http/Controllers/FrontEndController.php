<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class FrontEndController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function catalogo()
    {
        // Obtener vídeos desde la base de datos
        $videos = Video::all();
        return view('catalogo', compact('videos'));
    }

    public function adminPanel()
    {
        if (session('user') !== 'admin') {
            return redirect()->route('inicio');
        }

        $videos = Video::all();
        return view('admin.panel', compact('videos'));
    }

    public function addVideo(Request $request)
    {
        if (session('user') !== 'admin') {
            return redirect()->route('inicio');
        }

        // Validar y guardar el vídeo en la base de datos
        Video::create($request->only(['titulo', 'tipo', 'edad_recomendada', 'descripcion']));

        return redirect()->route('admin.panel');
    }

    public function login(Request $request)
    {
        if ($request->input('username') === 'admin' && $request->input('password') === 'admin') {
            session(['user' => 'admin']);
            return redirect()->route('admin.panel');
        }

        return redirect()->route('inicio')->withErrors(['error' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('inicio');
    }
}
