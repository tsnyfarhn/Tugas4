<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMA Soedirman</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMAN 4 BEKASI</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">List Siswa</a></li>
        </ul>
    </nav>

    </body>
</html>