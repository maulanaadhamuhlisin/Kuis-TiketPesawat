<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

        h3 {
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
        <h3>Edit Data Tiket</h3>
    </center>

    <?php foreach ($pesawat as $u) { ?>
        <form action="<?php echo base_url(). 'tiket/update'; ?>" method="post" enctype="multipart/form-data">
<center>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $u->nama ?>" placeholder="Input your name" required>
        
        <br>

        <label for="kodePesawat">Pilih kode pesawat:</label>
        <select id="kodePesawat" name="kode" >
            <option value="<?php echo $u->nama_pesawat ?>">GRD</option>
            <option value="<?php echo $u->nama_pesawat ?>">MPT</option>
            <option value="<?php echo $u->nama_pesawat ?>">BTV</option>
        </select>
        
        <br>

        <label for="kelas">Pilih Kelas:</label>
        <label><input type="radio" name="kelas" value="<?php echo $u->kelas ?>" required> Eksekutif</label>
        <br>
        <label><input type="radio" name="kelas" value="<?php echo $u->kelas ?>" required> Bisnis</label>
        <br>
        <label><input type="radio" name="kelas" value="<?php echo $u->kelas ?>" required> Ekonomi</label>
        
        <br>

        <label for="jumlahTiket">Jumlah Tiket:</label>
        <input type="number" id="jumlahTiket" name="jumlah" value="<?php echo $u->jumlah_tiket ?>" min="1" required >
        
        <br>

        <input type="submit" value="update"> <?php echo anchor('tiket','<input type=button value=kembali>'); ?>
    </center>

    </form>
<?php    } ?>
</body>
</html>
