<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!doctype html>
    <html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css" rel="stylesheet" />
    <title>Input Data Mahasiswa</title>
</head>

<body>
    </br>
    <div class="container">
    <h1 class="display-5 text-center mb-5">Tambah Data Zakat Fitrah</h1>
    <div class="p-3 mb-2 bg-light text-dark">
        <form action="<?php echo base_url('data/saveDataFitrah') ?>" method="post">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK Anda">
            </div>
            <div class="mb-3">
                <label for="keluarga" class="form-label">KELUARGA</label>
                <input type="text" name="keluarga" class="form-control" placeholder="Masukkan Nama Keluarga Anda">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">NOMOR HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Nomor Hp Anda">
            </div>
            <div class="mb-3">
                <label for="tgl" class="form-label">Tanggal Pembayaran</label>
                <div class="row">
                    <div class="col-md-4">
                        <select for="tgl" name="tgl" class="form-select">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select for="tgl" name="tgl" class="form-select">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                $month = date("F", mktime(0, 0, 0, $i, 10));
                                echo "<option value='$i'>$month</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select for="tgl" name="tgl" class="form-select">
                            <?php
                            for ($i = date("Y"); $i >= 1900; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
    <label for="jenis_zakat" class="form-label">Jenis Zakat</label>
    <select name="jenis_zakat" class="form-control">
        <option value="zakat_fitrah_uang">Zakat Fitrah - Uang</option>
        <option value="zakat_fitrah_beras">Zakat Fitrah - Beras</option>
        <option value="zakat_fitrah_jagung">Zakat Fitrah - Jagung</option>
        <option value="zakat_fitrah_kacang_hijau">Zakat Fitrah - Kacang Hijau</option>
        <option value="zakat_fitrah_kurma">Zakat Fitrah - Kurma</option>
        <option value="zakat_mal">Zakat Mal</option>
        <option value="infaq">Infaq</option>
    </select>
</div>

            <div class="mb-3">
                <label for="jumlah_jiwa" class="form-label">Jumlah Jiwa</label>
                <input name="jumlah_jiwa" class="form-control" type="text" placeholder="Masukkan Jumlah Jiwa Anda">
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input name="nominal" class="form-control" type="text" placeholder="Masukkan Nominal Anda">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan Anda">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"></script>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

