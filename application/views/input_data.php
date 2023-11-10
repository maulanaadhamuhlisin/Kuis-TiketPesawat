<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <style>
        /* Gaya CSS Anda disini */
        body {
            text-align: center;
        }

        form {
            width: 50%;
            margin: 20px auto;
            text-align: left;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
        }

        
    </style>
</head>
<style>
        /* Gaya CSS Anda disini */
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            margin-bottom: 0;
        }

        form {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type=text],
        input[type=number],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=radio] {
            margin-right: 5px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }
    </style>
<body>
    <center>
        <h2>TIKET ONLINE JAKARTA - MALAYSIA</h2>
        <label style="color:#FF0000"><?php echo validation_errors(); ?></label>
    </center>
    <form action="<?php echo base_url() . 'index.php/tiket/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Input your name" required>

        <label for="kodePesawat">Pilih kode pesawat:</label>
        <select id="kodePesawat" name="kode">
            <option value="GRD">GRD</option>
            <option value="MPT">MPT</option>
            <option value="BTV">BTV</option>
        </select>

        <label for="kelas">Pilih Kelas:</label>
        <label><input type="radio" name="kelas" value="Eksekutif" required> Eksekutif</label>
        <label><input type="radio" name="kelas" value="Bisnis" required> Bisnis</label>
        <label><input type="radio" name="kelas" value="Ekonomi" required> Ekonomi</label>

        <label for="jumlahTiket">Jumlah Tiket:</label>
        <input type="number" id="jumlahTiket" name="jumlah" min="1" required>

        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
        <?php echo anchor('tiket/index', '<input type=button value=\'Kembali\'>'); ?>
    </form>
</body>
</html>
