<?php include("config.php"); ?>
<html>
<head>
    <title>GURU</title>
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body bgcolor="yellow">
<div class="rpl"><font size="5"><strong><b><i>GURU SMK NEGERI 9 SEMARANG</i></a></b></strong></font></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="tb"><font color="white"><center>ABSENSI SISWA SMKN 9 SEMARANG</div></font></center>
            <br>
            <br>
            <br>
            <br>
            <div class="tokoonline"><center><i><font color="black"><b>Rekayasa Perangkat Lunak | SMK NEGERI 9 Semarang | JL.Peterongansari No.02 Semarang | Tlp/Wa : 0856266797</i></font></center></div></b>
            <center>
                <br>
                <br>
                <br>
                <img src="profil.jpg" width="810" height="255">
                <br>
                <div class="marque"><marquee style="font-family: arial; font-size: 1pgs; color: black">Selamat Datang di Absen Online Smk N 9 Semarang</marquee></div>
                <div class="kotakk">
                    <br>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>No.Absen</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Mata Pelajaran</th>
            <th>Hari / Tanggal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <body>
        <?php
        $sql = "SELECT * FROM absen_siswa";
        $query = mysqli_query($db, $sql);
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['nomer']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['mata_pelajaran']."</td>";
            echo "<td>".$siswa['haritgl']."</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </body>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <br></b></font></h1></td></tr></div>
    </form>
    </table>
            <br>
            <br>
    <div class="tuku"><center><font color="white">Didik Sri Purwdi</font></center></div>
    <br>
    <br>
    <br>
    <br>
    <div class="cr"><center><font color="white">copyright@afifahdvn_</font></center></div>
    <br>
    <br>
    <br>
    <center>
    <div class="rpll"><font size="3" font color="black"><a href="halaman_guru.php">BACK</a></font></div>
    <div class="rpll"><font size="3" font color="black"><a href="logout.php">LOGOUT</a></font></div>
</center>
</body>
</html>
    </body>
</html>