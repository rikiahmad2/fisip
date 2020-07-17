<?php
		$logo = base_url("public/template/assets/img/find_user.png");

		$pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->Image($logo, $pdf->GetX(),$pdf->GetY(),30);
        $pdf->Line(20, 43, 210-20, 43);
        $pdf->Line(20, 43.5, 210-20, 43.5);
        $pdf->SetFont('Arial','B',14);
        $pdf->Text(53,15,'KEMENTRIAN AGAMA REPUBLIK INDONESIA','C');

        $pdf->SetFont('Arial','B',12);
        $pdf->Text(75,20,'UNIVERSITAS ISLAM NEGERI','C');
        $pdf->Text(69,25,'SUNAN GUNUNG DJATI BANDUNG','C');
        $pdf->Text(59,30,'FAKULTAS ILMU SOSIAL DAN ILMU POLITIK ','C');

        $pdf->SetFont('Arial','',10);
        $pdf->Text(50,35,'JL. AH Nasution No.105 Bandung 4614 Telp. 022-7811918 Fax (022) 7811918','C');
        $pdf->Text(80,40,'Website :http://fisipuinsgd.ac.id','C');

        $pdf->SetFont('Arial','BU',12);
        $pdf->Text(66,50,'SURAT KETERANGAN AKTIF KULIAH','C');

        $pdf->SetFont('Arial','B',10);
        $pdf->Text(71,55,'Nomor : B-640/Un.05/III.II/PP.00./07/2020','C');

        $pdf->SetFont('Arial','',11);
        $pdf->Text(20,80,'Dekan Fakultas Ilmu Sosial dam Ilmu Politik (FISIP) Universitas Islam Negeri Sunan Gunung Djati Bandung','C');
        $pdf->Text(20,90,'menerangkan bahwa :','C');
        $pdf->Text(40,100,'Nama','C');
        $pdf->Text(40,110,'NIM','C');
        $pdf->Text(40,120,'Jurusan ','C');
        $pdf->Text(40,130,'Semester','C');
        $pdf->Text(40,140,'Tahun Akademik','C');
        $pdf->Text(80,100,':','C');
        $pdf->Text(80,110,':','C');
        $pdf->Text(80,120,': ','C');
        $pdf->Text(80,130,':','C');
        $pdf->Text(80,140,':','C');

        
        
        $pdf -> SetY(95);
        $pdf -> SetX(90);
        $pdf->Cell(100,8,$data['nama'],0,0,'L',False);
        $pdf -> SetY(105);
        $pdf -> SetX(90);
        $pdf->Cell(100,8,$data['nim'],0,0,'L',False);
        $pdf -> SetY(115);
        $pdf -> SetX(90);
        $pdf->Cell(100,8,$data['jurusan'],0,0,'L',False);
        $pdf -> SetY(125);
        $pdf -> SetX(90);
        $pdf->Cell(100,8,$data['semester'],0,0,'L',False);
        $pdf -> SetY(135);
        $pdf -> SetX(90);
        $pdf->Cell(100,8,$data['tahun_akademik'],0,0,'L',False);

        $pdf->Text(20,170,'adalah benar yang bersangkutan :','C');
        $pdf->Text(30,180,'1. Sebagai mahasiswa Aktif di Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) Universitas Islam Negeri','C');
        $pdf->Text(34,185,'Sunan Gunung Djati Bandung','C');
        $pdf->Text(30,195,'2. Berkelakuan Baik','C');
        $pdf->Text(30,205,'3. Tidak sedang Menerima Beasiswa','C');

        $pdf->Text(20,220,'Surat Keterangan ini dibuat untuk pengajuan','C');
        $pdf -> SetY(215);
        $pdf -> SetX(97);
        $pdf->Cell(100,7.5,'cek',0,0,'L',False);
        $pdf->Text(20,230,'Demikian, untuk dipergunakan sebagaimana mestinya','C');
        $pdf->Text(150,250,'Bandung, 03 Juli 2020 ','C');
        $pdf->SetFont('Arial','BU',11);
        $pdf->Text(149,280,'Dr. Muhamad Zuldin, M.Si','C');
        $pdf->SetFont('Arial','',11);
        $pdf->Text(149,285,'NIP. 197003301995051002','C');


         
        $pdf->Output();

 ?>