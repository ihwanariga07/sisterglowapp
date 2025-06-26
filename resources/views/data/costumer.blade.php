@extends('layout.master')
@section('title', 'Data Costumer')
@section('MenuCostumer', 'active')

@section('konten')
<div class="container text-center mt-3 bg-white">
    <h2 class="mb-3">Data Costumer</h2>
    <div class="row">
        <div class="m-auto col-8">
            <ol class="list-group">
                @forelse ($data_costumers as $costumer)
                    <li class="list-group-item">
                        <strong>{{ $costumer->nama }}</strong><br>
                        No. HP: {{ $costumer->no_hp }}<br>
                        Email: {{ $costumer->email }}
                    </li>
                @empty
                    <div class="alert alert-secondary" role="alert">
                        Maaf, Data Costumer Tidak Tersedia
                    </div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection
