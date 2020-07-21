<!-- <h1>izin kp</h1> -->
<p>
    1. Mahasiswa yang mengajukan pengantar izin kerja praktik wajib melampirkan surat persetujuan kerja praktik yang sudah di tanda tangani oleh dosen pembimbing kerja praktik dan ketua jurusan
    <br>
    2. Pengisian Alamat Tempat Kerja Praktik harus dilengkapi
    <br>
    3. Bagi Mahasiswa yang melaksanakan kerja praktik lebih dari 1 orang, wajib menghubungi langsung petugas pembuat surat
    <br>
    4. Jika ada pertanyaan hubungi petugas tata usaha
</p>

<hr>
<!-- form -->
<form action="<?=base_url();?>Admin/izinmagang" method ="post" enctype="multipart/form-data">
	<div class="form-group">
        <label>Tujuan Surat</label>
        <input type="text" name="tujuan" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>Di (Nama Instansi)</label>
        <input type="text" name="di" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <button type="submit" class="btn btn-success">BUAT IDZIN MAGANG</button>
</form>