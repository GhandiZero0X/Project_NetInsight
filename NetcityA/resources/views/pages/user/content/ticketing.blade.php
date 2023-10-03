@extends('layouts.appUtama')

@section('content')
<div class="container my-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route("pembayarans.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" aria-describedby="namalengkap" name="nama">
            <div id="namalengkap" class="form-text">Silahkan masukkan nama lengkap untuk pemilik tiket</div>
        </div>
        <div class="mb-3">
            <label for="notelp" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="notelp" aria-describedby="notelp" name="no_telp">
            <div id="notelp" class="form-text">Silahkan masukkan no telepon yang bisa dihubungi</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
            <div id="email" class="form-text">Silahkan masukkan email aktif</div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat">
            <div id="alamat" class="form-text">Silahkan masukkan alamat lengkap</div>
        </div>
        <label for="inputgGroupFile01" class="form-label">Upload Bukti Pembayaran</label>
        <div class="input-group mb-3">
            {{-- <label class="input-group-text" style="height: max-content" for="inputGroupFile01">Upload</label --}}
            <input type="file" style="height: max-content" class="form-control" id="inputGroupFile01" name="bukti_pemb">
        </div>
        <div class="mb-3 border border-1">
            <img src="" alt="" id="img-preview" style="" class="mw-100">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputGroupFile01").change(function(){
        readURL(this);
    });
</script>

@endsection
