<?php

namespace App\Http\Controllers;

use App\Models\RhkModel;
use App\Models\BidangModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RhkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $users = Auth::user();
        
        // dd($users->id);
        if($users){
            $rhk = RhkModel::with('dt_bidang', 'dt_user')->where('user_id',$users->id)->get();
            // dd($rhk);
             return view('rhk.index', [
                'rhk'=>$rhk
            ]); 
        };
        //  $rhk = RhkModel::with('dt_bidang', 'dt_user')->get();
        //  return view('rhk.index', [
        //     'rhk'=>$rhk
        // ]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidang = BidangModel::get();
        $user = User::get();
        return view('rhk.create', compact(['bidang', 'user'])); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nama_rhk' => 'required',
            'bidang_id' => 'required',
            'user_id' => 'required',
        ]);
        RhkModel::create($data);
        return redirect()->route('rhk.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rhk = RhkModel::find($id);
        return view('rhk.show', ['rhk'=>$rhk]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
