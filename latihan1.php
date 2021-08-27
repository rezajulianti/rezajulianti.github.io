
    <title> Daftar Data Mahasiswa</title>
    <h1> Data Mahasiswa
        <br>
            <table width ="100%" ;border="2px" style="border -collapse:collapse;">
            <table border ="3">
                    <td> ID </td>
                    <td> NPM</td>
                    <td> Nama</td>
                    <td> Kelas</td>
                    <td> Jurusan</td>
                    <td> Alamat</td>
                    <td> Opsi</td>  
                </tr>
        </br>
    </h1>


    <style type="text/css">
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
    </style>
    

    <?php
        include 'koneksi.php';
        $db = new Database();
        $con = $db->Connect();

        $query=mysqli_query($con,"select * from tbl_mahasiswa");
        while($data=mysqli_fetch_array($query))
        {
    ?>
    
    
    </tr>
        <td align = "center"> <?php echo $data['id']; ?></td>
        <td align = "center"> <?php echo $data['npm']; ?></td>
        <td align = "center"> <?php echo $data['nama']; ?></td>
        <td align = "center"> <?php echo $data['kelas']; ?></td>
        <td align = "center"> <?php echo $data['jurusan']; ?></td>
        <td align = "center"> <?php echo $data['alamat']; ?></td>
        <td><a href="latihan3.php?id=<?php echo $data['id']; ?>">Edit</a> | 
            <a href="latihan4.php?id=<?php echo $data['id']; ?>">Delete</a></td>
    </tr>

    <?php
        }
    ?>

    <table>
    </table>

    <br>

    <div class="page-header clearfix">
    <font size="4"><a href="latihan2.php" class="btn btn-success pull-right">Insert Mahasiswa</a>
  
    </div>

</center>