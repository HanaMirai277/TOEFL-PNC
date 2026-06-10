@extends('layouts.admin.main')

@section('title', 'Edit Jadwal Tes')

@section('content')
<div class="row">
    <div class="col-12">
        <h5 class="fw-bold mb-4">Edit Jadwal Tes</h5>

        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($error->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Terjadi kesalahan.</strong>
            <ul class="mb-0 mt-2">
                @foreach ($error->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{route('admin.jadwal-tes.update', $jadwalTes->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul_tes" class="form-label fw-bold">Judul Tes</label>
                <input type="text" name="judul_tes" id="judul_tes" class="form-control @error('judul_tes') is_invalid @enderror" value="{{old('judul_tes', $jadwalTes->judul_tes)}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('judul_tes')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jenis_tes" class="form-label fw-bold">Jenis Tes</label>
                <select name="jenis_tes" id="jenis_tes" class="form-select @error('jenis_tes') is_invalid @enderror" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px; background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 16 16%27%3e%3cpath fill=%27none%27 stroke=%27%236D28D9%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%272%27 d=%27m2 5 6 6 6-6%27/%3e%3c/svg%3e');">
                    <option value="" {{old('jenis_tes', $jadwalTes->jenis_tes) ? '' : 'selected'}}>Pilih Jenis Tes</option>
                    <option value="EPT-P" {{old('jenis_tes', $jadwalTes->jenis_tes) === 'EPT-P' ? 'selected' : ''}}>EPT-P</option>
                    <option value="ITP" {{old('jenis_tes', $jadwalTes->jenis_tes) === 'ITP' ? 'selected' : ''}}>ITP</option>
                </select>
                @error('jenis_tes')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_tes" class="form-label fw-bold">Tanggal Tes</label>
                <input type="date" name="tanggal_tes" id="tanggal_tes" class="form-control @error('tanggal_tes') is_invalid @enderror" value="{{old('tanggal_tes', $jadwalTes->tanggal_tes->format('Y-m-d))}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('tanggal_tes')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="waktu" class="form-label fw-bold">Waktu</label>
                <input type="text" name="waktu" id="waktu" class="form-control @error('waktu') is_invalid @enderror" value="{{old('waktu', $jadwalTes->waktu)}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('waktu')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label fw-bold">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is_invalid @enderror" value="{{old('lokasi', $jadwalTes->lokasi)}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('lokasi')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kuota" class="form-label fw-bold">Kuota</label>
                <input type="number" name="kuota" id="kuota" class="form-control @error('kuota') is_invalid @enderror" value="{{old('kuota', $jadwalTes->kuota)}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('kuota')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control @error('harga') is_invalid @enderror" min="0" value="{{old('harga', (float) $jadwalTes->harga)}}" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
                @error('harga')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="d-flex gap-2 mt-5">
                <a href="{{route('admin.jadwal-tes')}}" class="btn btn-outline-secondary py-2 px-4" style="border-radius: 30px; font-size: 1rem;">
                    Kembali ke Daftar Tes
                </a>

                <button type="submit" class="btn text-white py-2 fw-bold" style="background-color: #5D16A6; border-radius: 30px; font-size: 1rem;">
                    Simpan Perubahan
                </button>

                <a href="{{route('admin.jadwal-tes.show', $jadwalTes->id)}}" class="btn btn-outline-danger py-2 px-4" style="border-radius: 30px; font-size: 1rem;">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection