<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = ""; // Ganti jika ada
$dbname = "dina"; // Ganti dengan nama database kamu

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data reservasi
$sql = "SELECT * FROM reservation ORDER BY date, time";
$result = $conn->query($sql);

// Tampilkan dalam bentuk tabel
echo "<h2>Daftar Reservasi</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
            <thead style='background-color: maroon; color: white;'>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No. Telepon</th>
                    <th>Jumlah Orang</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Meja</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['name']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['people']}</td>
                <td>{$row['date']}</td>
                <td>{$row['time']}</td>
                <td>{$row['table_number']}</td>
                <td>{$row['message']}</td>
              </tr>";
        $no++;
    }
    echo "</tbody></table>";
} else {
    echo "<p>Tidak ada data reservasi.</p>";
}

$conn->close();
?>
