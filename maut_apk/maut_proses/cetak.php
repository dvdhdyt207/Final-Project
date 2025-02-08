<?php
require_once('../TCPDF/tcpdf.php');


class MYPDF extends TCPDF {
    // header
    public function Header() {
        $this->SetTitle('Laporan Hasil Penilaian Kinerja Guru MAN 1 Bukittinggi');
        $this->SetFont('times', 'B', 12);
        $this->Cell(0, 15, 'Laporan Hasil Penilaian Kinerja Guru MAN 1 Bukittinggi', 0, 1, 'C');
        $tanggal = date('d-m-Y');
        $this->Cell(0, 10, 'Pada: ' . $tanggal, 0, 0, 'C');
    }
}

// Create new PDF document
$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Admin');
$pdf->SetTitle('Laporan Hasil Penilaian Kinerja Guru MAN 1 Bukittinggi');

// Set margins (left, top, right)
$pdf->SetMargins(15, 30, 15); // Adjusted margins to leave more space for the content

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('times', '', 12);

// Start your table
$html = '<table class="table table-striped" style="width: 100%; border-collapse: collapse;">'; 
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th scope="col" style="text-align:center; width: 10%; border: 1px solid #000;">NO</th>'; // Lebar kolom diatur di sini
$html .= '<th scope="col" style="text-align:center; width: 35%; border: 1px solid #000;">Nama Guru</th>';
$html .= '<th scope="col" style="text-align:center; border: 1px solid #000;">Nilai Preferensi</th>';
$html .= '<th scope="col" style="text-align:center; border: 1px solid #000;">Penilaian</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

// Fetch data and add rows
include "../insert_data/koneksi.php";
$no = 1;
$query = mysqli_query($kon, 'SELECT tbl_maut.*, tbl_guru.nama
                            FROM tbl_maut
                            JOIN tbl_guru ON tbl_maut.id_guru = tbl_guru.id_guru ORDER BY np DESC');

while ($data = mysqli_fetch_array($query)) {
    $html .= '<tr>';
    $html .= '<td style="text-align:center; width: 10%; border: 1px solid #000;">' . $no++ . '</td>';
    $html .= '<td style= "border: 1px solid #000; width: 35%;">' . $data['nama'] . '</td>';
    $html .= '<td style= "border: 1px solid #000;">' . $data['np'] . '</td>';
    $html .= '<td style= "border: 1px solid #000;">' . $data['penilaian'] . '</td>';
    $html .= '</tr>';
}

// Close your table
$html .= '</tbody>';
$html .= '</table>';

// Add the table to your PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output PDF
$pdf->Output('laporan_penilaian_guru.pdf', 'I');
?>
