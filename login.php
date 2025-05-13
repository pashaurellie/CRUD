<!DOCTYPE html>  
<html>  
<head>  
    <title>CRUD Data Siswa SMK</title>  
</head>  
<body>  
    <h2>Data Siswa SMK 1 Wonosobo</h2>  
    <br/>  
    <a href="form_tambah.php">+ TAMBAH SISWA</a>  
    <br/>  
    <table border="1">  
        <thead>  
            <tr>  
                <th>NO</th>  
                <th>Nama</th>  
                <th>NIS</th>  
                <th>Alamat</th>  
                <th>OPSI</th>  
            </tr>  
        </thead>  
        <tbody>  
            <?php  
            include 'koneksi.php';  
            $no = 1;  
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");  
            while ($d = mysqli_fetch_array($data)) {  
                ?>  
                <tr>  
                    <td><?php echo $no++; ?></td>  
                    <td><?php echo $d['nama']; ?></td>  
                    <td><?php echo $d['nis']; ?></td>  
                    <td><?php echo $d['alamat']; ?></td>  
                    <td>  
                        <a href="form_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>  
                        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>  
                    </td>  
                </tr>  
                <?php  
            }  
            ?>  
        </tbody>  
    </table>  
</body>  
</html>  