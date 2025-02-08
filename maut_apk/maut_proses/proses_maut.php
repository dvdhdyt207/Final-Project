<?php
include "..//insert_data/koneksi.php";

//menenghapus seluruh isi tabel maut, dan reset id
$sql_hapus = "TRUNCATE TABLE tbl_maut";
$hasil_hapus = mysqli_query($kon, $sql_hapus);
$reset_id = "ALTER TABLE tbl_maut AUTO_INCREMENT = 1";
$hasil_reset_id = mysqli_query($kon, $reset_id);

// Mendapatkan data penilaian dari tabel
$query = mysqli_query($kon, 'SELECT * FROM tbl_penilaian');
$alternatif = array();

while ($data = mysqli_fetch_array($query)) {
    $alternatif[] = array(
        'c1' => $data['c1'],
        'c2' => $data['c2'],
        'c3' => $data['c3'],
        'c4' => $data['c4'],
        'c5' => $data['c5'],
        'id_guru' => $data['id_guru']
    );
}

// Mengambil nilai 'bbt' untuk setiap id_b dan menyimpannya dalam array $bobot
$bobot = array(
    'c1' => getValueFromDatabase($kon, 1),
    'c2' => getValueFromDatabase($kon, 2),
    'c3' => getValueFromDatabase($kon, 3),
    'c4' => getValueFromDatabase($kon, 4),
    'c5' => getValueFromDatabase($kon, 5)
);

// Fungsi untuk mengambil nilai 'bbt' dari database berdasarkan id_b
function getValueFromDatabase($kon, $id_b) {
    $query = mysqli_query($kon, "SELECT bbt FROM tbl_bobot WHERE id_b = $id_b");
    if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row['bbt'];
    } else {
        return 0; 
    }
}

// Normalisasi 
$normalisasi = array();
foreach ($alternatif as $alt) {
    foreach ($alt as $kriteria => $nilai) {
        $normalisasi[$kriteria][] = $nilai;
    }
}

// Pembobotan nilai normalisasi
$pembobotan = array();
foreach ($normalisasi as $kriteria => $nilai) {
    $max = max($nilai);
    $min = min($nilai);

    $bawah = $max - $min;

    foreach ($nilai as $n) {
        // cek nilai bawah tidak nol
        $bobotNilai = ($bawah != 0) ? ($n - $min) / $bawah : 0;
        $pembobotan[$kriteria][] = $bobotNilai;
    }
}

// Menghitung nilai utilitas untuk setiap alternatif
foreach ($pembobotan['c1'] as $index => $value) {
    $utilitas = 0;

    foreach ($bobot as $kriteria => $bobotNilai) {
        // Menggunakan rumus utilitas: utilitas = nilai * bobot
        $utilitas += $pembobotan[$kriteria][$index] * $bobotNilai;
    }

    // Menambahkan nilai utilitas ke dalam array alternatif
    $alternatif[$index]['utilitas'] = $utilitas;

    // Menentukan nilai preferensi
    $nilai_preferensi = $utilitas;

    // Menentukan penilaian
    if ($nilai_preferensi >= 0.60) {
        $penilaian = 'Kinerja Baik';
    } else {
        $penilaian = 'Kinerja Kurang Baik';
    }

    // memasukkan ke db tbl_maut
    $sql_tbl_maut = "INSERT INTO tbl_maut (id_guru, np, penilaian) 
                        VALUES ('" . $alternatif[$index]['id_guru'] . "', '" . $nilai_preferensi . "', '" . $penilaian . "')";

    $hasil_maut = mysqli_query($kon, $sql_tbl_maut);
}

// Fungsi untuk menampilkan array dalam bentuk tabel HTML
function displayTable($data, $title) {
    echo "<h3>$title</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>";
    foreach (array_keys($data[0]) as $header) {
        echo "<th>$header</th>";
    }
    echo "</tr>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}

// Tampilkan hasil normalisasi
$normalisasiTable = array();
foreach ($normalisasi as $kriteria => $nilai) {
    foreach ($nilai as $index => $n) {
        $normalisasiTable[$index][$kriteria] = $n;
    }
}
displayTable($normalisasiTable, "Tabel Normalisasi");

// Tampilkan hasil pembobotan
$pembobotanTable = array();
foreach ($pembobotan as $kriteria => $nilai) {
    foreach ($nilai as $index => $n) {
        $pembobotanTable[$index][$kriteria] = $n;
    }
}
displayTable($pembobotanTable, "Tabel Pembobotan");

// Tampilkan hasil utilitas dan preferensi
$utilitasTable = array();
foreach ($alternatif as $index => $alt) {
    $utilitasTable[] = array(
        'id_guru' => $alt['id_guru'],
        'utilitas' => $alt['utilitas'],
        'penilaian' => ($alt['utilitas'] >= 0.60) ? 'Kinerja Baik' : 'Kinerja Kurang Baik'
    );
}
displayTable($utilitasTable, "Tabel Utilitas dan Penilaian");

// Menutup koneksi ke database
mysqli_close($kon);
?>
