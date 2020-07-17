<!-- <h1>SURAT AKTIF KULIAH</h1> -->
<p>
    Catatan :
    <br>
    1. Bagi Mahasiswa Pemohon Surat Aktif Kuliah harap melengkapi Tujuan/Keperluan Surat Tersebut
    <br>
    2. Pemohonan Surat Aktif Kuliah Khusus Beasiswa mohon dicantumkam Program Beasiswa tersebut
    <br>
    3. Jika ada pertanyaan hubungi petugas tata usaha (087722008851)
</p>

<hr>
<!-- form -->
<form action="<?=base_url();?>Admin/aktif_kuliah" method ="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text"  name="jurusan" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>Semester</label>
        <input type="text" name="semester" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>Tahun Akademik</label>
        <input type="text" name="tahun_akademik" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label>Program</label>
        <input type="text" name="program" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
    </div>

    <button type="submit" value="upload" class="btn btn-primary">Submit</button>
</form>