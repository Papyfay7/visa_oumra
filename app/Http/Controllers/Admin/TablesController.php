<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Registration; // Corrigez l'importation ici
use Illuminate\Http\Request;

class TablesController extends Controller
{
public function index()
{
// Récupérez les enregistrements depuis la base de données
$registrations = Registration::paginate(6); // Ajustez la requête si nécessaire

// Passez les enregistrements à la vue
return view('html.tables', compact('registrations'));
}
}
