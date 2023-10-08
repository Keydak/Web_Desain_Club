<?php
if (isset($_POST['asomaso'])) {
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $ND = $_POST['namaDepan'];
    $NB = $_POST['namaBelakang'];
    $tanggal_lahir = $_POST['Tgl-lahir'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $alamat = $_POST['alamat'];
    $cita = $_POST['cita-cita'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>proses</title>
</head>

<body>
    <div class="container">
        <form style="padding: 50px;" method="post" action="proses-data.php">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" name="nama" value="<?= $nama?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Depan</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" name="namaDepan" value="<?= $ND?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" name="namaBelakang" value="<?= $NB?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal lahir</label>
                <div class="col-sm-10 mb-2">
                    <input type="date" class="form-control" name="Tgl-lahir" value="<?= $tanggal_lahir?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10 mb-2">
                    <select class="form-select" name="kelamin" aria-label="Default select example" style="width: 20%;" value="<?= $kelamin?>" readonly>
                        <option selected>Menu</option>
                        <option value="laki-laki">Lakik</option>
                        <option value="perempuan">PeremPUAN</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10 mb-2">
                    <textarea name="alamat" id="" cols="30" rows="10" value="<?= $alamat?>" readonly></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Hobi</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" name="hobi" value="<?= $hobi?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">cita-cita</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" name="cita-cita" value="<?= $cita?>" readonly>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block" name="asomaso">asomaso</button>
            </div>
        </form>
    </div>

</body>

</html>