<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show($slug)
    {
        // A $slug az URL-ből érkezik.
        // Például: /modules/self-assessment → $slug = "self-assessment"

        // A config/modules.php fájlból próbáljuk betölteni a megfelelő modult.
        // A "modules.$slug" azt jelenti:
        // keresd meg a modules.php fájlban a $slug nevű kulcsot.
        $module = config("modules.$slug");

        // Ha nincs ilyen modul a configban, akkor 404-es hibát dobunk.
        // Ez megakadályozza, hogy hibás vagy nem létező URL-eket használjanak.
        if (!$module) {
            abort(404);
        }

        // Ha létezik a modul, akkor átadjuk a Blade nézetnek.
        // A 'modules.show' a resources/views/modules/show.blade.php fájlra mutat.
        // A compact('module') annyit tesz: hozz létre egy $module változót a view-ban.
        return view('modules.show', compact('module'));
    }
}
