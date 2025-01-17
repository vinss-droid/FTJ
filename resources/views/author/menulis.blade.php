@extends('layouts.head')

@section('title', 'Menulis')

@section('konten')

<div class="container py-5">
    <a href="/karyatulis" class="btn btn-outline-danger fw-bold mb-3">Kembali</a>
    <div class="card shadow-lg rounded-3 border-0">
        <form action="/kirimtulisan" method="POST" class="p-5" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-end mb-3">
                <button class="btn text-info fw-bold" type="submit" name="submit" value="simpan">Simpan</button>
                <button class="btn btn-info text-white fw-bold" type="submit" name="submit" value="submit">Submit</button>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Artikel</label>
                <input type="text" value="{{ old('judul') }}" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Tulis judul kamu disini...">
                @error('judul')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Judul wajib diisi!
                    </div>                
                @enderror
            </div>
            <div class="mb-3">
                <label for="cuplikan" class="form-label">Cuplikan Artikel</label>
                <input type="text" value="{{ old('cuplikan') }}" name="cuplikan" class="form-control @error('cuplikan') is-invalid @enderror" placeholder="Tulis cuplikan kamu disini...">
                @error('cuplikan')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Cuplikan wajib diisi!
                    </div>                
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Masukkan Gambar untuk Artikel</label>
                <input type="file" value="{{ old('gambar') }}" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Artikel</label>
                <textarea  value="{{ old('isi') }}" name="isi" class="form-control @error('isi') is-invalid @enderror" placeholder="Mulai menulis cerita..." style="height: 100px"></textarea>
                {{-- <label for="floatingTextarea2">Comments</label> --}}
                @error('isi')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Isi artikel wajib diisi!
                    </div>                
                @enderror
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script>
@endsection