@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit Data Costumer</div>

                <div class="card-body">
                    <form method="POST" action="/costumers/{{ $costumer->id_costumers }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- ID Costumer tidak diedit jika sebagai primary --}}
                        <div class="mb-3">
                            <label class="form-label">ID Costumer</label>
                            <input type="text" value="{{ $costumer->id_costumers }}" class="form-control" disabled>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ $costumer->nama }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No Handphone</label>
                            <input type="text" name="no_hp" value="{{ $costumer->no_hp }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $costumer->email }}" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
