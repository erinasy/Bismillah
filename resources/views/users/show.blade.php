@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('USERS DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <tr>
                        <tr><th>ID</th><th>:</th><td>{{ $users->id }}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $users->name }}</td></tr>
                            <tr><th>Username</th><th>:</th><td>{{ $users->username }}</td></tr>
                            <tr><th>Bidang</th><th>:</th><td>{{ $users->dt_bidangUser->nama_bidang }}</td></tr>
                            <tr><th>Kategori</th><th>:</th><td>{{ $users->dt_kategoriUser->nama_kategori}}</td></tr>
                            <tr><th>Email</th><th>:</th><td>{{ $users->email }}</td></tr>
                            <tr><th>Password</th><th>:</th><td>{{ $users->password }}</td></tr>
                            <tr><th>Created At</th><th>:</th><td>{{ $users->created_at }}</td></tr>
                        </tr>
                    </table>
                    <a href='/users' class="btn btn-secondary ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection