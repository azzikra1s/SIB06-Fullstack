<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .krs-info {
            margin-top: 40px;
            border: 1px solid #ddd;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kartu Rencana Studi (KRS)</h1>
        <?php

        class Mahasiswa {
            private $nama;
            private $mataKuliah;

            public function __construct($nama) {
                $this->nama = $nama;
                $this->mataKuliah = [];
            }

            public function tambahMataKuliah($mataKuliah) {
                $this->mataKuliah[] = $mataKuliah;
            }

            public function getNama() {
                return $this->nama;
            }

            public function getMataKuliah() {
                return $this->mataKuliah;
            }
        }

       
        class DosenWali {
            private $nama;

            public function __construct($nama) {
                $this->nama = $nama;
            }

            public function tampilkanKRS(Mahasiswa $mahasiswa) {
                echo "<div class='krs-info'>";
                echo "<p><strong>Nama Mahasiswa:</strong> " . $mahasiswa->getNama() . "</p>";
                echo "<p><strong>Mata Kuliah yang Diambil:</strong> " . implode(", ", $mahasiswa->getMataKuliah()) . "</p>";
                echo "<p><strong>Dosen Pengampu:</strong> " . $this->nama . "</p>";
                echo "<p><strong>Kampus:</strong> Institut Teknologi Telkom Purwokerto</p>";
                echo "</div>";
            }
        }

        // Contoh penggunaan
        $namaMahasiswa = "Az Zikra Ismunandar";
        $mahasiswa = new Mahasiswa($namaMahasiswa);
        $mahasiswa->tambahMataKuliah("Matematika Diskrit");
        $mahasiswa->tambahMataKuliah("Bahasa Indonesia");
        $mahasiswa->tambahMataKuliah("Kewarganegaraan");

        $namaDosenWali = "Dosen Wali, M.Pd.";
        $dosenWali = new DosenWali($namaDosenWali);

        $dosenWali->tampilkanKRS($mahasiswa);
        ?>
    </div>
</body>
</html>
