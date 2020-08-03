<?php
		$logo = base_url("public/template/assets/img/find_user.png");

		$pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->Image($logo, $pdf->GetX(),$pdf->GetY(),30);
        $pdf->SetMargins(2,2,2,2);
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
        $pdf->Text(82,50,'SURAT IZIN MAGANG','C');

        $pdf->SetFont('Times','',11);
        $pdf->Text(20,65,'Nomor','C');
        $pdf->Text(20,70,'Lamp','C');
        $pdf->Text(20,75,'Hal','C');

        $pdf->Text(35,65,': B7988723213','C');
        $pdf->Text(35,70,': -','C');
        $pdf->Text(35,75,': Magang Kerja','C');

        $coba['tanggal_rub'] = date('d F Y');

        $pdf->Text(160,65,'Bandung, '.$coba['tanggal_rub'],'C');

        $pdf->Text(35,90,'  Kepada Yth,','C');
        $pdf -> SetY(91);
        $pdf -> SetX(36);
        $pdf->Cell(40,5,$data['tujuan'],0,0,'L',False);
        $pdf->Text(35,100,'  Di','C');
        $pdf -> SetY(101);
        $pdf -> SetX(36);
        $pdf->Cell(40,5,$data['di'],0,0,'L',False);

        $pdf->SetFont('Times','B',11);
        $pdf->Text(35,115,"Assalamu'alaikum Wr,Wb.",'C');

        $pdf->SetFont('Times','',11);
        $pdf->Text(35,120,"Dekan Fakultas Ilmu Sosial Dan Politik(FISIP) UIN Sunan Gunung Djati Bandung dengan ini memohon",'C');
        $pdf->Text(20,125,"kesediaan Bapak/Ibu untuk memberikan izin kepada :",'C');

        $pdf->Text(35,135,"Nama",'C');
        $pdf->Text(35,140,"NIM",'C');
        $pdf->Text(35,145,"Jurusan/Program",'C');
        $pdf->Text(35,150,"Semester",'C');
        $pdf->Text(65,135,":",'C');
        $pdf->Text(65,140,":",'C');
        $pdf->Text(65,145,":",'C');
        $pdf->Text(65,150,":",'C');

        $pdf->SetFont('Times','B',11);
        $pdf -> SetY(131);
        $pdf -> SetX(70);
        $pdf->Cell(65,5,$data['nama'],0,0,'L',False);
        $pdf->SetFont('Times','',11);
        $pdf -> SetY(136);
        $pdf -> SetX(70);
        $pdf->Cell(65,5,$data['nim'],0,0,'L',False);
        $pdf -> SetY(141);
        $pdf -> SetX(70);
        $pdf->Cell(65,5,$data['jurusan'],0,0,'L',False);
        $pdf -> SetY(147);
        $pdf -> SetX(70);
        $pdf->Cell(65,5,$data['semester'],0,0,'L',False);

        $pdf->Text(20,170,"Yang bersangkutan akan",'C');
        $pdf->SetFont('Times','B',11);
        $pdf->Text(59,170,"Magang Kerja",'C');
        $pdf->SetFont('Times','',11);
        $pdf->Text(84,170,"di Instansi/Lembaga/Perusahaan yang bapak/ibu pimpin.",'C');
        $pdf->Text(20,175,"Sehubungan dengan hal tersebut, kami memohon dengan kiranya Bapak/Ibu dapat memberikan izin",'C');
        $pdf->Text(20,180,"kepada yang bersangkutan.",'C');
        $pdf->Text(35,190,"Demikian atas kerjasamanya kami ucapkan terimakasih.",'C');
        $pdf->SetFont('Times','B',11);
        $pdf->Text(35,195,"Wassalamu'alaikum Wr.Wb",'C');
        $pdf->SetFont('Times','',11);
        $pdf->Text(130,210,"a.n. Dekan",'C');
        $pdf->Text(137,215,"Kabag Tata Usaha",'C');
        $pdf->SetFont('Times','BU',11);
        $pdf->Text(137,240,"Dra.Ruli Nurul Fatonah.M.Ag.",'C');
        $pdf->SetFont('Times','B',11);
        $pdf->Text(137,245,"NIP.196309041988032001",'C');



         
        $pdf->Output();

 ?>