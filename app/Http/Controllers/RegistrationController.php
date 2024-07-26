<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
public function store(Request $request)
{
// Validation des données
$request->validate([
'first_name' => 'required|string|max:255',
'last_name' => 'required|string|max:255',
'email' => 'required|email|max:255',
'phone' => 'required|string|max:255',
'age' => 'required|integer',
'gender' => 'required|in:male,female',
'address' => 'required|string|max:255',
'city' => 'required|string|max:255',
'postal_code' => 'required|string|max:255',
'documents.*' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
]);

// Création d'un nouvel enregistrement
$registration = new Registration();
$registration->first_name = $request->input('first_name');
$registration->last_name = $request->input('last_name');
$registration->email = $request->input('email');
$registration->phone = $request->input('phone');
$registration->age = $request->input('age');
$registration->gender = $request->input('gender');
$registration->address = $request->input('address');
$registration->city = $request->input('city');
$registration->postal_code = $request->input('postal_code');

// Gestion des fichiers uploadés
if ($request->hasFile('documents')) {
$files = $request->file('documents');
$filePaths = [];
foreach ($files as $file) {
$path = $file->store('documents'); // Stockage dans le répertoire public/documents
$filePaths[] = $path;
}
$registration->documents = json_encode($filePaths); // Stocke les chemins comme tableau JSON
}

$registration->save();

return redirect()->back()->with('success', 'Registration successful!');
}

    public function index()
    {
        $registrations = Registration::all(); // Récupère tous les enregistrements
        return view('html.tables', ['registrations' => $registrations]); // Passe les enregistrements à la vue
    }
}
