<!-- <h1>Lulus Tahfidz</h1> -->
<p>
    Pemohon Surat Keterangan Lulus Tahfidz Wajib Menyerahkan Form Penilaian yang Sudah di Tanda Tangani Oleh Penguji
</p>

<hr>

<!-- form -->
<form action="<?=base_url();?>Admin/sk_sidang" method ="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul Skripsi</label>
        <input type="text" name="judul" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <button type="submit" value="upload" class="btn btn-primary">Submit</button>
</form>