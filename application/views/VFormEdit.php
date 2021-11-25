<!DOCTYPE html>
<html>

<head>
    <title>Halaman Edit Artikel Baju</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        .container {
            padding: 16px;
            background-color: white;
        }

        /* input[type=checkbox],
    input[type=radio], */
    input[type=text],
    input[type=email],
    input[type=password],
    input[type=date],
    input[type=file],
    input[type=option] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    /* input[type=checkbox]:focus,
    input[type=radio]:focus, */
    input[type=text]:focus,
    input[type=email]:focus,
    input[type=password]:focus,
    input[type=date]:focus,
    input[type=file]:focus,
    input[type=option]:focus {
      background-color: #ddd;
      outline: none;
    }

        select {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        select:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        a {
            color: dodgerblue;
        }
    </style>
</head>

<body>

    <form action="<?php echo base_url('cform/fungsiEdit') ?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Halaman Edit Data Pasien</h1>
            <hr>

            <label><b>ID</b></label>
            <input type="text" name="id" value="<?php echo $queryArtikel->id ?>" readonly>

            <label><b>Nama</b></label>
            <input type="text" name="nama" value="<?php echo $queryArtikel->nama ?>">

            <label<b>Keluhan</b></label><br><br>
                <textarea id="keluhan" name="keluhan" rows="1" cols="163" value="<?php echo $queryArtikel->keluhan ?>"></textarea> <br>
                <script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace('keluhan');
                </script>

                <label<b>Email</b></label>
                    <input type="email" name="email" value="<?php echo $queryArtikel->email ?>">

                    <label<b>Password</b></label>
                        <input type="password" name="password" value="<?php echo $queryArtikel->password ?>">

                        <label<b>Tanggal Lahir</b></label>
                            <input type="date" name="tgl_lahir" value="<?php echo $queryArtikel->tgl_lahir ?>">

                            <label<b>Foto</b></label>
                                <input type="file" name="foto" value="<?php echo $queryArtikel->foto ?>">

                                <label<b>Kewarganegaraan</b></label>
                                    <select name="warga_negara" id="warga_negara">
                                        <option value="">Pilih Kewarganegaraan</option>
                                        <option value="WNA <?php echo $queryArtikel->warga_negara ?>">WNA</option>
                                        <option value="WNI <?php echo $queryArtikel->warga_negara ?>">WNI</option>
                                    </select>

                                    <label<b>Gender</b></label> <br>
                                        <input type="radio" name="jenis_kelamin" value="Pria <?php echo $queryArtikel->jenis_kelamin ?>">
                                        <label<b>Pria</b></label> <br>
                                            <input type="radio" name="jenis_kelamin" value="Wanita <?php echo $queryArtikel->jenis_kelamin ?>">
                                            <label<b>Wanita</b></label> <br><br>

                                                <label<b>Agreement</b></label> <br>
                                                    <input type="checkbox" name="agreement" value="Agree <?php echo $queryArtikel->agreement ?>">
                                                    <label<b>Agree</b></label>
                                                        <hr>

                                                        <button type="submit" class="registerbtn">Update Data</button>
        </div>
    </form>
</body>

</html>