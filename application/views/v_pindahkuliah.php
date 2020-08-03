<!-- <h1>PINDAH KULIAH</h1> -->
<p>
    1. Pemohon Pindah Kuliah Wajib Melampirkan Surat Permohonan Pribadi yang ditandatangani mahasiswa ybs dan orangtua/wali
    <br>
    2. Surat permohonan Pribadi Ditujukan ke Dekan Fakultas Ilmu Sosial dan Ilmu Politik
</p>

<hr>

<!-- form -->
<form action="<?=base_url();?>Admin/beasiswa" method ="post" enctype="multipart/form-data">
	<div class="form-group">
        <label>Nama Beasiswa</label>
        <input type="text" name="nama_beasiswa" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <button type="submit" class="btn btn-primary">Ajukan Beasiswa</button>
</form>