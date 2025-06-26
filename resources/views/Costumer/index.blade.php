@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="float-end">
                        <a href="/costumers/create" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-user-plus"></i> Tambah Costumer
                        </a>
                    </div>
                    <h5 class="mt-1">Data Costumer</h5>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>#</th>
                                <th>ID Costumer</th>
                                <th>Nama</th>
                                <th>No. HP</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_costumers as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->id_costumers }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->no_hp }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                        <a href="/costumers/{{ $data->id_costumers }}/edit" class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <!-- Tombol hapus dengan modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $data->id_costumers }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- Modal Konfirmasi Hapus -->
                                        <div class="modal fade" id="hapusModal{{ $data->id_costumers }}" tabindex="-1" aria-labelledby="hapusModalLabel{{ $data->id_costumers }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Konfirmasi Hapus</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin ingin menghapus costumer <strong>{{ $data->nama }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="/costumers/{{ $data->id_costumers }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Costumer tidak tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
