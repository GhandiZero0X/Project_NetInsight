@extends('layouts.appUtama')

@section('content')
    <div class="container vh-100">
        @if (count($pembayarans)>0)
            <div class="mt-3">
            @foreach ($pembayarans as $pembayaran)
            <div class="card mb-3" style="">
                <div class="card-body">
                    <h5 class="card-title">{{ date('d M Y - H:i', $pembayaran->created_at->timestamp) }}</h5>
                    <p class="card-text"><span style="font-weight: bold">Nama :</span> {{ $pembayaran->nama }}</p>
                    <p style="font-weight: bold">Status : </p>
                    @if ($pembayaran->status)
                        <p class="text-primary">Selesai</p>
                    @else
                        <p class="text-warning">Sedang diproses</p>
                    @endif
                    <a href="{{ 'ticketing/'.$pembayaran->id }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @endforeach
            </div>
        @else
        <div class="col-lg-13" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
            <p class="text-dark font-weight-bold text-center"
                style="font-size: 40px; line-height: 1.5; padding: 50px 0;">Belum ada pembayaran ..</p>
        </div>
        @endif
    </div>
@endsection
