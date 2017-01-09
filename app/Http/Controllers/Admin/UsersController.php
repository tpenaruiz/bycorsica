<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $users = \App\Users::with('roles', 'villes')
            ->where('nom', 'LIKE', '%' . $request->search . '%')
            ->orWhere('prenom', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
            ->orWhere('id', 'LIKE', '%' . $request->search . '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
        $users->setPath('users');
        // AJAX
        $info = \App\Users::with('roles', 'villes')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return response()->json([
                'info' => $info
            ]);
        }
        return view('admin.users.index', compact('users'));
    }
    public function search()
    {
    }
    public function create(Request $request)
    {
        // Récupération des élément Lists (pluck) Laravel v5.3 <=> (lists) Laravel < v5.3
        $role = \App\Roles::pluck('libelle', 'id');
        $ville = \App\Villes::pluck('libelle', 'id');
        $pays = \App\Pays::pluck('nom_fr_fr', 'id');
        // AJAX
        $list_pays = \App\Pays::orderBy('created_at', 'desc')->get();
        $list_ville = \App\Villes::with('pays')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return response()->json([
                'pays' => $list_pays,
                'villes' => $list_ville
            ]);
        }
        return view('admin.users.create', compact('role', 'ville', 'pays'));
    }
    public function store(UsersRequest $request)
    {
        $users = new \App\Users;
        $users->id_role = $request->id_role;
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->email = $request->email;
        $users->status = 'Actif';
        $users->id_ville = $request->id_ville;
        $generatePass = \App\Http\Controllers\Admin\AdminController::ficelle()->generatePassword(12);
        $users->password = \Hash::make($generatePass . \Config::get('constante.salt'));
        $users->save();
        // TODO Faire l'envoie du mail au destinateur
        // ...
        return redirect()->route('users.index');
    }
    public function show($user)
    {
        dd($user);
    }
    public function edit($user)
    {
    }
    public function update(Request $request, $users)
    {
    }
    public function statusOff(Request $request, $users)
    {
        $users->status = 'Archivé';
        $users->save();
        // AJAX
        $info = \App\Users::with('roles', 'villes')->where('id', '=', $users->id)->get();
        if ($request->ajax()) {
            return response()->json([
                'id' => $users->id,
                'info' => $info
            ]);
        }
        return redirect()->route('users');
    }
    public function statusOn(Request $request, $users)
    {
        $users->status = 'Actif';
        $users->save();
        // AJAX
        $info = \App\Users::with('roles', 'villes')->where('id', '=', $users->id)->get();
        if ($request->ajax()) {
            return response()->json([
                'id' => $users->id,
                'info' => $info
            ]);
        }
        return redirect()->route('users');
    }
    public function destroy(Request $request, $users)
    {
        $u = \App\Users::find($users);
        $u->delete();
        // AJAX
        // TODO Mettre en traduction les chaine de caractère ci-dessous !
        $message = 'Element supprimer !';
        if ($request->ajax()) {
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('users');
    }
}