<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table td,
        .table th {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
        }

        .table th {
            background-color: darkblue;
            color: #ffffff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        /*responsive*/

        @media(max-width: 500px) {
            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;
            }

            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }
        }

        .button {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .buttonedit {
            background-color: #f0ad4e;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .buttondelete {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .buttoncart {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Daftar Data Pasien</h1>
            <?php echo $this->session->flashdata('message'); ?>
        </section>
        <section class="content">
            <a href="<?php echo base_url('/cform/halaman_tambah') ?>" class="button" style="color: white; text-decoration: none;">Tambah Data Pasien</a>
            <br><br>
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Keluhan</th>
                    <!-- <th>Email</th>
                    <th>Password</th> -->
                    <th>Tanggal Lahir</th>
                    <th>Foto</th>
                    <th>Kewarganegaraan</th>
                    <th>Gender</th>
                    <!-- <th>Agreement</th> -->
                </tr>

                <?php
                $count = 0;
                foreach ($baju as $row) {
                    $count = $count + 1;
                ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row->id ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->keluhan ?></td>
                        <!-- <td><?php echo $row->email ?></td>
                        <td><?php echo $row->password ?></td> -->
                        <td><?php echo $row->tgl_lahir ?></td>
                        <td>
                            <center>
                                <img src="<?php echo base_url('./images/'); ?><?php echo $row->foto; ?>" border="0" width="70px" height="70px"/>
                            </center>
			 		    </td>
                        <!-- <td><?php echo $row->foto ?></td> -->
                        <td><?php echo $row->warga_negara ?></td>
                        <td><?php echo $row->jenis_kelamin ?></td>
                        <!-- <td><?php echo $row->agreement ?></td> -->
                        <td><a href="<?php echo base_url('/cform/halaman_edit') ?>/<?php echo $row->id ?>" class="buttonedit" style="color: white; text-decoration: none;">Edit</a>
                            <a href="<?php echo base_url('/cform/fungsiDelete') ?>/<?php echo $row->id ?>" class="buttondelete" style="color: white; text-decoration: none;">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>