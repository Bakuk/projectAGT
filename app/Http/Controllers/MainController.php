<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function about()
    {
        $title = "Заголовок";
        $content = 'Привет, мой любимый мир';

        return view('auth/about', [
            'title' => $title,
            'content' => $content,
        ]);
    }

    public function services(): void
    {
        echo "services page";
    }
}
