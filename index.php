<html>
    <head>
        <title>Digital Talent</title>
    </head>
        <body>
        <h2>List Mahasiswa</h2>
        
        <table border = "1">
            <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th>
            <th>ALAMAT</th><th>ACTION</th></tr>
            <?php
            include "koneksi.php";
            $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            $no = 1;
            foreach ($mahasiswa as $row){
                $jenis_kelamin = $row['gender'] == 'Perempuan'?'Perempuan' : 'Laki laki';
                echo "<tr>
                    <td>$no</td>
                    <td>" . $row['nim'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>$jenis_kelamin</td>
                    <td>" . $row['jurusan'] . "</td>
                    <td>".$row['alamat']."</td>
                    <td><a href='form-edit.php?id_mhs=$row[no]'>Edit</a> 
                        <a href='delete.php?id_mhs=$row[no]'>Delete</a>
                    </td>
                        </tr>";
                            $no++;
            }
            ?>
        </table>
        <button><a href=form-input.php?id_mhs=row[id_mhs]>Input</a></button>
    </body>
</html>
