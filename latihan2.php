
<?php
    include 'koneksi.php';
    $db=new Database();
    $con=$db->Connect();

    if(isset($_POST['proses']))
    {
        $query=mysqli_query($con,"insert into tbl_mahasiswa values(
            '".$_POST['id']."',
            '".$_POST['npm']."',
            '".$_POST['nama']."',
            '".$_POST['kelas']."',
            '".$_POST['jurusan']."',
            '".$_POST['alamat']."'
         )");
         header('location:latihan1.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data </title>
    <h1><Center> Masukan Data </center></h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br> </br>
                    <form action="latihan2.php" method="POST" name="form1">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control">
                        </div>
                       <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="proses" value="Save">
                        <a href="latihan1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    a, button,input[type=submit],input[type=reset] {
    font-size: 18px; 
    color: black;
    border: black 1px solid;
    border-radius: 8px;
    padding: 3px 15px;
    margin-top: 5px;
    }
    a {
    text-decoration: none;
    }
        a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
            opacity:0.9;
    }
</style>