<?php
include 'CRUD/reservasi restoran/db.php';

$biaya_per_orang = 100000;
$pesan_error = "";
$pesan_sukses = "";

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
    $jam = isset($_POST['jam']) ? $_POST['jam'] : '';
    $jumlah_orang = isset($_POST['jumlah_orang']) ? intval($_POST['jumlah_orang']) : 0;
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
    $id_meja = isset($_POST['id_meja']) ? intval($_POST['id_meja']) : 0;

    $total_biaya = $jumlah_orang * $biaya_per_orang;

    if (empty($jam)) {
        $pesan_error = "Jam reservasi belum dipilih.";
    } else {
        // Cek konflik jadwal
        $cek = $conn->prepare("SELECT * FROM reservasi WHERE tanggal=? AND jam=? AND id_meja=?");
        $cek->bind_param("ssi", $tanggal, $jam, $id_meja);
        $cek->execute();
        $result = $cek->get_result();

        if ($result->num_rows > 0) {
            $pesan_error = "Meja sudah dipesan pada tanggal dan jam tersebut.";
        } else {
            // Simpan data reservasi
            $stmt = $conn->prepare("INSERT INTO reservasi (nama, telepon, tanggal, jam, jumlah_orang, pesan, id_meja, total_biaya) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssisi", $nama, $telepon, $tanggal, $jam, $jumlah_orang, $pesan, $id_meja, $total_biaya);
            if ($stmt->execute()) {
                $pesan_sukses = "Reservasi berhasil disimpan.";
            } else {
                $pesan_error = "Gagal menyimpan reservasi.";
            }
        }
    }
}

// Ambil daftar meja
$meja_query = $conn->query("SELECT * FROM meja");
$meja_list = [];
while ($row = $meja_query->fetch_assoc()) {
    $meja_list[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reservasi Restoran</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f3f5;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            padding: 30px 40px;
        }

        h2 {
            margin-bottom: 25px;
            color: #2f3640;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            transition: border 0.2s ease;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .row .form-group {
            flex: 1;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px;
            width: 100%;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #43a047;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .alert-success {
            background-color: #e6f4ea;
            color: #2e7d32;
        }

        .alert-error {
            background-color: #fdecea;
            color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reservasi Restoran</h2>

        <?php if ($pesan_sukses): ?>
            <div class="alert alert-success"><?= $pesan_sukses ?></div>
        <?php elseif ($pesan_error): ?>
            <div class="alert alert-error"><?= $pesan_error ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="row">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="telepon" required>
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Reservasi</label>
                <input type="date" name="tanggal" required>
            </div>

            <div class="form-group">
                <label>Pilih Jam</label>
                <select name="jam" required>
                    <option value="">-- Pilih Jam --</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>

            <div class="form-group">
                <label>Jumlah Orang</label>
                <input type="number" name="jumlah_orang" min="1" required>
            </div>

            <div class="form-group">
                <label>Pesan / Catatan Khusus</label>
                <textarea name="pesan" placeholder="Contoh: Kursi dekat jendela, membawa anak kecil, dll..."></textarea>
            </div>

            <div class="form-group">
                <label>Pilih Meja</label>
                <select name="id_meja" required>
                    <option value="">-- Pilih Meja --</option>
                    <?php foreach ($meja_list as $meja): ?>
                        <option value="<?= $meja['id_meja'] ?>">
                            <?= $meja['nama_meja'] ?> (Kapasitas: <?= $meja['kapasitas'] ?> orang)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>
