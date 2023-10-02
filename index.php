<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Tambahkan link Bootstrap CSS di sini -->
</head>
<body>
    <div class="container mt-5">
        <h1>Data Buku</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once "koneksi.php";

                $sql = "SELECT * FROM book";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["judul"] . "</td>";
                        echo "<td>" . $row["deskripsi"] . "</td>";
                        echo "<td>" . $row["tahun_terbit"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Tidak ada data buku.";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </div>
    <!-- Tambahkan link Bootstrap JS di sini (jika diperlukan) -->
</body>
</html>
