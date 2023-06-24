<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use App\Models\KategoriModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('dt_Bidang', 'dt_Kategori')->get();
        return view('users.index',[
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidang = BidangModel::get();
        $kategori = KategoriModel::get();
        return view('users.create', compact(['bidang', 'kategori'])); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
               'username' => $input['username'],
                'name' => $input['name'],
                'bidang_id' => $input['bidang_id'],
                'kategori_id' => $request['kategori_id'],
                'email' => $input['email'],
                'role' => $input['role'],
                'password' => Hash::make($input['password'])
        ]);
            // $data = $this->validate($request, [
            //     'username' => $request->get('username'),
            //     'name' => $request->get('name'),
            //     'bidang_id' => $request->get('bidang_id'),
            //     'kategori_id' => $request->get('kategori_id'),
            //     'email' => $request->get('email'),
            //     'role' => $request->get('role'),
            //     'password' => Hash::make('password')
            // ]);
            // User::create($data);
            return redirect()->route('users.index')->with('success', 'Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        return view('users.show',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::find($id);
        $bidang = BidangModel::all();
        return view('users.edit',['users'=>$users,'bidang'=>$bidang]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->department = $request->department;
        $student->phone_number = $request->phone_number;

        $kelas = new Kelas;
        $kelas->id = $request->Kelas;
        $student->kelas()->associate($kelas);
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function __construct()
    // {
    //      $this->middleware('auth');
    //      $this->middleware(function($request, $next){
    //      if(Gate::allows('manage-users')) return $next($request);
    //      abort(403, 'Anda tidak memiliki cukup hak akses');
    //      });
    // }

}
