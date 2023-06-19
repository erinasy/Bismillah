@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('RHK DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <tr>
                            <tr><th>ID</th><th>:</th><td>{{ $rhk->id }}</td></tr>
                            <tr><th>Nama RHK</th><th>:</th><td>{{ $rhk->nama_rhk }}</td></tr>
                            <tr><th>Nama Bidang</th><th>:</th><td>{{ $rhk->dt_bidang->nama_bidang }} </td></tr>
                            <tr><th>Nama User</th><th>:</th><td>{{ $rhk->dt_user->name }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $rhk->created_at }}</td></tr>
                        </tr>
                    </table>
                    <a href='/rhk' class="btn btn-secondary ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection