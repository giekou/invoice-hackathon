<?php
include('index.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload Invoice(s)</title>
        <style type="text/css">
            body {
                background-color: #fff;
                margin: 12px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
                
            }
            #body{
                margin: 0 15px 0 15px;
            }
            #container{
                margin: 10px;
                width: 600px;
                padding: 10px;
                border: 1px solid #D0D0D0;
                -webkit-box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="striped">
            <thead>
            <tr>
                <th>Kode PO</th>
                <th>Tanggal Unggah</th>
                <th>Batas Akhir Pembayaran</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>AA-0294</td>
                <td>01/01/1971</td>
                <td>15/01/1971</td>
                <td class="new badge red">Open</td>
            </tr>
            </tbody>
        </table>
    </body>