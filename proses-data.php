
<?php
if (isset($_POST['asomaso'])) {
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];

    echo "nama anda : $nama <br>";
    echo "jenis kelamin anda : $kelamin <br>";
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
        <form style="padding: 50px;">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10 mb-2">
                    <input type="text" class="form-control" value="<?= $nama ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10 mb-2">
                    <select class="form-select" name="kelamin" disabled aria-label="Default select example" style="width: 20%;">
                        <option selected><?= $kelamin ?></option>
                    </select>
                </div>
            </div>
            <div class="d-grid">
                 <a href="index.php" class="btn btn-primary btn-block">kembali</a>
            </div>
        </form>
    </div>
</body>


</html>