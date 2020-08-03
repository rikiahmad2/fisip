<?php
		$logo = base_url("public/template/assets/img/find_user.png");

		$pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->SetMargins(2,2,2,2);
        $pdf->Image($logo, $pdf->GetX(),$pdf->GetY(),30);
        $pdf->Line(20, 43, 210-20, 43);
        $pdf->Line(20, 43.5, 210-20, 43.5);
        $pdf->SetFont('Times','B',14);
        $pdf->Text(53,15,'KEMENTRIAN AGAMA REPUBLIK INDONESIA','C');

        $pdf->SetFont('Times','B',12);
        $pdf->Text(75,20,'UNIVERSITAS ISLAM NEGERI','C');
        $pdf->Text(69,25,'SUNAN GUNUNG DJATI BANDUNG','C');
        $pdf->Text(59,30,'FAKULTAS ILMU SOSIAL DAN ILMU POLITIK ','C');

        $pdf->SetFont('Times','',10);
        $pdf->Text(50,35,'JL. AH Nasution No.105 Bandung 4614 Telp. 022-7811918 Fax (022) 7811918','C');
        $pdf->Text(80,40,'Website :http://fisipuinsgd.ac.id','C');

        $pdf->SetFont('Times','BU',12);
        $pdf->Text(79,50,'SURAT REKOMENDASI','C');

        $pdf->SetFont('Times','B',10);
        $pdf->Text(71,55,'Nomor : B-640/Un.05/III.II/PP.00./07/2020','C');
        $pdf->SetFont('Times','',11);
        $pdf->Text(20,75,'Ketua Jurusan Administrasi Publik Fakultas Ilmu Sosial Dan Politik (FISIP) UIN Sunan Gunung Djati Bandung,','C');
        $pdf->Text(20,80,'Merekomendasikan mahasiswa kami, yakni :','C');

        $pdf->Text(40,100,'Nama','C');
        $pdf->Text(40,110,'NIM','C');
        $pdf->Text(40,120,'Jurusan','C');
        $pdf->Text(40,130,'Semester','C');
        $pdf->Text(70,100,':','C');
        $pdf->Text(70,110,':','C');
        $pdf->Text(70,120,':','C');
        $pdf->Text(70,130,':','C');

        $pdf -> SetY(97);
        $pdf -> SetX(75);
        $pdf->Cell(70,5,$data['nama'],0,0,'L',False);
        $pdf -> SetY(107);
        $pdf -> SetX(75);
        $pdf->Cell(70,5,$data['nim'],0,0,'L',False);
        $pdf -> SetY(117);
        $pdf -> SetX(75);
        $pdf->Cell(70,5,$data['jurusan'],0,0,'L',False);
        $pdf -> SetY(127);
        $pdf -> SetX(75);
        $pdf->Cell(70,5,$data['semester'],0,0,'L',False);

        $pdf->Text(20,150,'Untuk mengikuti seleksi mendapatkan Beasiswa','C');
        $pdf -> SetY(147.5);
        $pdf -> SetX(95);
        $pdf->Cell(70,3,$data['nama_beasiswa'].'. Adapun Mahasiswa yang direkomendasikan',0,0,'L',False);

        $pdf->Text(20,155,'diatas adalah ','C');
        $pdf->SetFont('Times','BI',11);
        $pdf->Text(41,155,'Mahasiswa dengan nilai (IPK Sementara) diatas 3,5 (Tiga Koma Lima), dan memiliki kemampuan','C');
        $pdf->Text(20,160,'softskill yang dapat dipertanggung jawabkan','C');
        $pdf->SetFont('Times','',11);
        $pdf->Text(93,160,'sesuai data yang kami dapat dari berbagai sumber.','C');
        $pdf->Text(20,165,'Demikian rekomendasi ini dibuat agar dipergunakan sebagimana mestinya.','C');

        $coba['tanggal_rub'] = date('d F Y');
        $pdf->Text(140,200,'Bandung, '.$coba['tanggal_rub'] ,'L');
        $pdf->Text(140,205,'Hormat saya ,','L');
        $pdf->SetFont('Times','B',11);
        $pdf->Text(140,210,'Ketua Jurusan Administrasi Publik','L');
        $pdf->SetFont('Times','BU',11);
        $pdf->Text(140,240,'Khaerul Umam,S.IP,SE,M.Ag','L');
        $pdf->SetFont('Times','B',11);
        $pdf->Text(140,245,'NIP.19861121200901011002','L');

         
        $pdf->Output();

 ?>