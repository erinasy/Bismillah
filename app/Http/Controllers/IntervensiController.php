<?php

namespace App\Http\Controllers;

use App\Models\IntervensiModel;
use App\Models\BidangModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntervensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        
        // dd($users->id);
        if($users){
            $intervensi = IntervensiModel::with('dt_bidangIn', 'dt_userIn')->where('user_id',$users->id)->get();
            // dd($rhk);
             return view('intervensi.index', [
                'intervensi'=>$intervensi
            ]); 
        };
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidang = BidangModel::get();
        $user = User::get();
        return view('intervensi.create', compact(['bidang', 'user'])); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $this->validate($request, [
        //     'nama_intervensi' => 'required',
        //     'bidang_id' => 'required',
        //     'user_id' => 'required',
        // ]);
        // IntervensiModel::create($data);
        // return redirect()->route('intervensi.index')->with('success', 'Data berhasil disimpan');

        $request->validate([
                'input.*.nama_intervensi' => 'required',
                'input.*.bidang_id' => 'required',
                'input.*.user_id' => 'required'
            ],
            [
                'input.*.nama_intervensi' => 'Masukkan Data Intervensi!!!',
                'input.*.bidang_id' => 'Pilih Kode Bidangi!!!',
                'input.*.user_id' => 'Pilih Kode User!!!'
            ]
        );

        foreach($request->input as $key => $value){
            IntervensiModel::create($value);
        }

        return redirect()->route('intervensi.index')->with('success', 'Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     */
    public function show(IntervensiModel $intervensi)
    {
        // return view('intervensi.detail', compact('intervensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IntervensiModel $intervensi)
    {
        // return view('intervensi.edit', compact(['intervensi']));
        // // HARUS PAKE COMPACT
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IntervensiModel $id)
    {
        // $data=$request->all();

        // $intervensi->update($data);
        // return redirect()->route('intervensi.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IntervensiModel $intervensi)
    {
        $intervensi->delete($intervensi->id);
        return redirect()->route('intervensi.index')->with('success', 'Data berhasil dihapus');
    }
}
