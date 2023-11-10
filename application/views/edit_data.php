<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
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