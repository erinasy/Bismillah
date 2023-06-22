@extends('sb-admin.index')

@section('title')
    | DATA RHK
@endsection
@section('content')
<h2>DATA RHK INTERVENSI PIMPINAN</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            {{-- TOMBOL TAMBAH --}}
            <a href="intervensi/create" class="btn btn-success btn-icon-split">
                <span class="icon text-white-40">
                     <i class="fas fa-plus"></i>
                </span>
                 <span class="text">Tambah RHK Intervensi</span>
            </a>

            {{-- ALERT SUKSES --}}
            @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                 </div> 
            @endif

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Intervensi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($intervensi as $key => $a)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $a->nama_intervensi}}</td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
