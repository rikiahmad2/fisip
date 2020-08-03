<?php
		$logo = base_url("public/template/assets/img/find_user.png");

		$pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();
        $pdf->SetMargins(2,2,2,2);
        $pdf -> SetY(5);
        $pdf -> SetX(95);
        $pdf->Image($logo, $pdf->GetX(),$pdf->GetY(),20);
        $pdf->SetFont('Times','B',13);
        $pdf->Text(30,35,'SURAT KEPUTUSAN DEKAN FAKULTAS ILMU SOSIAL DAN POLITIK','C');
        $pdf->Text(45,40,'UNIVERSITAS ISLAM SUNAN GUNUNG DJATI BANDUNG','C');
        $pdf->SetFont('Times','B',12);
        $pdf->Text(70,45,'Nomor : B-408/Un.05/III.8/PP.00.9/05/2020','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(98,50,'Tentang','C');
        $pdf->SetFont('Times','B',13);
        $pdf->Text(40,55,'JUDUL DAN PEMBIMBING PENYUSUNAN SKRIPSI MAHASISWA','C');
        $pdf->Text(50,60,'DEKAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(15,75,'Menimbang','C');
        $pdf->Text(45,75,':','C');
        $pdf->Text(50,75,'Bahwa Laboratorium Fakultas Ilmu Sosial dan Ilmu Politik UIN Sunan Gunung Djati','C');
        $pdf->Text(50,80,'Bandung telah menyetujui judul skripsi yang bersangkutan pada tanggal 8 Mei 2020','C');

        $pdf->Text(15,88,'Mengingat','C');
        $pdf->Text(45,88,':','C');
        $pdf->Text(53,88,'1. Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional;','C');
        $pdf->Text(53,93,'2. Undang-Undang Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan;','C');
        $pdf->Text(53,98,'3. Peraturan Pemerintah Nomor 66 Tahun 2010 tentang Perubahan atas Peraturan','C');
        $pdf->Text(56,103,' Pemerintah Nomor 17 Tahun 2010 tentang Pengelolaan Pendidikan;','C');
        $pdf->Text(53,108,'4. Peraturan Presiden Nomor 57 Tahun 2005 tentang Perubahan Status IAIN Sunan','C');
        $pdf->Text(56,113,' Gunung Djati Bandung Menjadi UIN Sunan Gunung Djati Bandung;','C');
        $pdf->Text(53,118,'5. Peraturan Menteri Agama RI Nomor 07 Tahun 2013 Jo Peraturan Menteri Agama','C');
        $pdf->Text(56,123,' No.77 Tahun 2013 tentang Organisasi dan Tata Kerja UIN Sunan Gunung Djati','C');
        $pdf->Text(56,128,' Bandung;','C');
        $pdf->Text(53,133,'6. Peraturan Menteri Agama RI Nomor 14 Tahun 2015 tentang Statuts UIN','C');
        $pdf->Text(56,138,' Sunan Gunung Djati Bandung;','C');
        $pdf->Text(53,143,'7. Keputusan Rektor UIN Sunan Gunung Djati Bandung, Nomor: B-342/Un.05','C');
        $pdf->Text(56,148,' /I.1/PP.00.9/11/2018 Tentang Penetapan Pedoman Akademik UIN Sunan Gunung','C');
        $pdf->Text(56,153,' Djati Bandung Tahun Akademik 2018.','C');
        $pdf->Text(53,158,'8. Keputusan Rektor UIN Sunan Gunung Djati Bandung, Nomor: B-149/Un.05/I.1','C');
        $pdf->Text(56,163,' /PP.00.9/04/2019 Tentang Kalender Akademik UIN Sunan Gunung Djati','C');
        $pdf->Text(56,168,' Bandung Tahun Akademik 2019/2020.','C');
        $pdf->Text(53,173,'9. Keputusan Rektor UIN Sunan Gunung Djati Bandung 401/Un.05/II.2/Kp07.6','C');
        $pdf->Text(56,178,' /08/2019 tanggal 15 Agustus 2019 tentang Pengangkatan Dekan Fakultas','C');
        $pdf->Text(56,183,' Ilmu Sosial dan Ilmu Politik.','C');

        $pdf->Text(15,188,'Memperhatikan','C');
        $pdf->Text(45,188,':','C');
        $pdf->Text(50,188,'Surat saudara Acep Rahmat, Nomor Pokok 11680200002, Tanggal : 15 April 2020 perihal','C');
        $pdf->Text(50,193,'pengajuan judul.','C');
        $pdf->SetFont('Times','B',13);
        $pdf->Text(90,198,'MEMUTUSKAN','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(15,203,'Menetapkan','C');
        $pdf->Text(45,203,':','C');
        $pdf->SetFont('Times','B',13);
        $pdf->Text(50,203,'SURAT KEPUTUSAN DEKAN FAKULTAS ILMU SOSIAL DAN ILMU','C');
        $pdf->Text(50,208,'POLITIK UIN SUNAN GUNUNG DJATI BANDUNG TENTANG JUDUL','C');
        $pdf->Text(50,213,'DAN PEMBIMBING PENULISAN SKRIPSI MAHASISWA.','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(15,223,'Pertama','C');
        $pdf->Text(45,223,':','C');
        $pdf->Text(50,223,'Mengesahkan Judul Skripsi:','C');
        $pdf -> SetY(224);
        $pdf -> SetX(49);
        $pdf->SetFont('Times','B',13);
        $pdf->MultiCell( 150, 5, $data['judul'], 0,'L');
        $pdf->SetFont('Times','',12);

        $pdf->Text(50,243,'Atas Nama','C');
        $pdf->Text(80,243,':','C');
        $pdf->Text(50,248,'Nomor Pokok','C');
        $pdf->Text(80,248,':','C');
        $pdf->Text(50,253,'Jurusan','C');
        $pdf->Text(80,253,':','C');

        $pdf->SetFont('Times','B',12);
        $pdf -> SetY(240);
        $pdf -> SetX(85);
        $pdf->Cell(120,5,$data['nama'], 0,'L');
        $pdf -> SetY(245);
        $pdf -> SetX(85);
        $pdf->Cell(120,5,$data['nim'], 0,'L');
        $pdf -> SetY(250);
        $pdf -> SetX(85);
        $pdf->Cell(120,5,$data['jurusan'], 0,'L');

        $pdf->SetFont('Times','',12);
        $pdf->Text(15,263,'Kedua','C');
        $pdf->Text(45,263,':','C');
        $pdf->Text(50,263,'Mengangkat Saudara:','C');
        $pdf -> SetY(264);
        $pdf -> SetX(56);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(150,5,'1. '.$data['dp1'], 0,'L');
        $pdf -> SetY(269);
        $pdf -> SetX(56);
        $pdf->Cell(150,5,'2. '.$data['dp2'], 0,'L');
        $pdf->SetFont('Times','',12);
        $pdf->Text(50,279,'Sebagai Pembimbing Penulisan Skripsi tersebut','C');     
        
        $pdf->AddPage();
        $pdf->Text(15,23,'Ketiga','C');
        $pdf->Text(45,23,':','C');
        $pdf->Text(50,23,'Pembimbing bertugas melakukan bimbingan penulisan skripsi sesuai dengan pedoman','C');
        $pdf->Text(50,28,'akademik yang berlaku pada UIN Sunan Gunung Djati Bandung;','C');
        $pdf->Text(15,33,'Keempat','C');
        $pdf->Text(45,33,':','C');
        $pdf->Text(50,33,'Kepada Pembimbing diberikan honorarium sesuai dengan peraturan yang berlaku;','C');
        $pdf->Text(15,38,'Kelima','C');
        $pdf->Text(45,38,':','C');
        $pdf->Text(50,38,'Surat Keputusan ini berlaku sejak tanggal ditetapkan sampai mahasiswa yang','C');
        $pdf->Text(50,43,'bersangkutan lulus dalam ujian program Strata Satu (S-1);','C');
        $pdf->Text(15,48,'Keenam','C');
        $pdf->Text(45,48,':','C');
        $pdf->Text(50,48,'Segala sesuatu akan diperbaiki kembali sebagaimana mestinya apabila dikemudian','C');
        $pdf->Text(50,53,'hari ternyata terdapat kekeliruan dalam penetapan ini.','C');

        $pdf->SetFont('Times','B',12);
        $pdf->Text(15,63,'Surat Keputusan ini disampaikan kepada:','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(15,68,'1. Yth. Rektor UIN Sunan Gunung Djati Bandung;','C');
        $pdf->Text(15,73,'2. Yth. Pembimbing Skripsi;','C');
        $pdf->Text(15,78,'3. Yang bersangkutan','C');

        $pdf->Text(120,83,'Ditetapkan di','C');
        $pdf->Text(145,83,':','C');
        $pdf -> SetY(80);
        $pdf -> SetX(150);
        $pdf->Cell(60,4,'Bandung, 08 Mei 2020', 0,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Text(120,88,'Dekan,','C');
        $pdf->SetFont('Times','',12);
        $pdf->Text(120,113,'Ahmad Ali Nurdin, Ph.D.,','C');
        $pdf->Text(120,118,'NIP. 197305271998031001','C');


        $pdf->Output();

 ?>