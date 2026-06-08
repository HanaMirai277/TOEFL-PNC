@extends('layouts.admin.main')

@section('title', 'Tambah Jadwal Baru')

@section('content')
<div class="row">
    <div class="col-12">
        <h5 class="fw-bold mb-4">Tambah Jadwal Baru</h5>

        <form action="#" method="post">
            @csrf
            <div class="mb-3">
                <label for="judul_tes" class="form-label fw-bold">Judul Tes</label>
                <input type="text" name="judul_tes" id="judul_tes" class="form-control" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="mb-3">
                <label for="jenis_tes" class="form-label fw-bold">Jenis Tes</label>
                <select name="jenis_tes" id="jenis_tes" class="form-select" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px; background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 16 16%27%3e%3cpath fill=%27none%27 stroke=%27%236D28D9%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%272%27 d=%27m2 5 6 6 6-6%27/%3e%3c/svg%3e');">
                    <option value="" selected>Pilih Jenis Tes</option>
                        <option value="EPT-P">EPT-P</option>
                        <option value="ITP">ITP</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_tes" class="form-label fw-bold">Tanggal Tes</label>
                <input type="date" name="tanggal_tes" id="tanggal_tes" class="form-control" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="mb-3">
                <label for="waktu" class="form-label fw-bold">Waktu</label>
                <input type="text" name="waktu" id="waktu" class="form-control" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label fw-bold">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="mb-3">
                <label for="kouta" class="form-label fw-bold">Kouta</label>
                <input type="text" name="kouta" id="kouta" class="form-control" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" value="0" style="border-color: #5D16A6; border-radius: 12px; padding: 6px 12px;">
            </div>

            <div class="d-grid mt-5">
                <button type="submit" class="btn text-white py-2 fw-bold" style="background-color: #5D16A6; border-radius: 30px; font-size: 1.1rem;">
                    Simpan Jadwal
                </button>
            </div>
        </form>
    </div>
</div>
@endsection