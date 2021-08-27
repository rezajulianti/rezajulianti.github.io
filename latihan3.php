<?php
include 'koneksi.php';
$db = new Database();
$con = $db->Connect();

$id = $_GET['id'];
$query = mysqli_query($con,"select * from tbl_mahasiswa where id = '$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update']))
    {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $edit = mysqli_query($con,"update tbl_mahasiswa set npm='$npm', nama='$nama', kelas='$kelas',jurusan='$jurusan', alamat='$alamat' where npm='$npm'");
    
    if($edit)
    {
    mysqli_close($con);
    header("location:latihan1.php");
    exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data Mahasiswa</title>
    <h1><Center> Edit Data Mahasiswa </center></h1>
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
                    <div class="page-header">
                    <form action="latihan3.php" method="POST">
                        
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" value="<?php echo $data['id'] ?>" placeholder="Enter ID" Required>
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control" value="<?php echo $data['npm'] ?>" placeholder="Enter npm" Required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" placeholder="Enter nama" Required>
                        </div>
                        <div class="form-group">
                            <label>kelas</label>
                            <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>" placeholder="Enter kelas" Required>
                        </div>
                        <div class="form-group">
                            <label>jurusan</label>
                            <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan'] ?>" placeholder="Enter jurusan" Required>
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" placeholder="Enter alamat" Required>
                        </div>
                        <input type="submit" name="update" value="Update">
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
    background: #5F9EA0;
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