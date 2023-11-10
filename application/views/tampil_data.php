<!-- tampil_data.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        /* Gaya CSS Anda disini */
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth; 
        }

        h3 {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            margin-bottom: 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #3498db;
            display: inline-block;
            padding: 10px; /* Tambahkan padding untuk membuat tanda titik rata */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type=button] {
        background-color: #3498db;
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease; /* Tambahkan ini untuk efek transisi hover */
        }

        input[type=button]:hover {
        background-color: #2980b9;
        }

    </style>
</head>
<body>
    <h3>PEMESANAN TIKET PESAWAT ONLINE JAKARTA - MALAYSIA</h3>
    <table>
        <?php 
        $no_tiket = 1;
        foreach ($pesawat as $u) { ?>
            <tr>
                <td>No Tiket : <?php echo $no_tiket++; ?></td>
            </tr>
            <tr>
                <td>Nama : <?php echo $u->nama; ?></td>
            </tr>
            <tr>
                <td>Nama Pesawat : <?php echo $u->nama_pesawat; ?></td>
            </tr>
            <tr>
                <td>Kelas Pesawat : <?php echo $u->kelas; ?></td>
            </tr>
            <tr>
                <td>Harga Tiket : <?php echo $u->harga_tiket; ?></td>
            </tr>
            <tr>
                <td>Jumlah Tiket : <?php echo $u->jumlah_tiket; ?></td>
            </tr>
            <tr>
                <td>Total Bayar : <?php echo $u->total; ?></td>
            </tr>
            <tr>
                <td>
                    <?php echo anchor('tiket/edit/'.$u->no_tiket, '<button>Edit</button>'); ?>
                    <?php echo anchor('tiket/hapus/'.$u->no_tiket, '<button>Hapus</button>'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <center>
        <?php echo anchor('tiket/tambah', '<button>Tambah Data</button>'); ?>
    </center>
</body>
</html>
