<?php
include('index.php');

?>
<body>

    <div class="container">
<div class="col s12 m8 offset-m1 xl7 offset-xl1">
        <table class="responsive-table">
            <thead>
            <tr>
                <th>Kode PO</th>
                <th>Tanggal Unggah</th>
                <th>Batas Akhir Pembayaran</th>
                <th >Latest status</th>
                <th >detail</th>
            </tr>
            </thead>
            <tbody>               
            <tr>
                <td>AA-0294</td>
                <td>03/03/2022</td>
                <td>23/03/2022</td>
                <td><b class="new badge red btn" id="statusButton" >Butuh Revisi</b></td>
                <td><a class="new badge blue modal-trigger btn" href="#modal1">click</a> </td>
            </tr>
            <tr>
                <td>AA-0295</td>
                <td>03/03/2022</td>
                <td>23/03/2022</td>
                <td><b class="new badge amber btn" id="statusButton" >Dokumen Diterima</b></td>
                <td><a class="new badge blue modal-trigger btn" href="#modal2">click</a> </td>
            </tr>
            <tr>
                <td>AA-0296</td>
                <td>03/03/2022</td>
                <td>23/03/2022</td>
                <td><b class="new badge teal btn" id="statusButton" >Dokumen Dalam pengecekan</b></td>
                <td><a class="new badge blue modal-trigger btn" href="#modal2">click</a> </td>
            </tr>
            <tr>
                <td>AA-0296</td>
                <td>03/03/2022</td>
                <td>23/03/2022</td>
                <td><b class="new badge green lighten-3 btn" id="statusButton" >Sudah Selesai Pengecekan</b></td>
                <td><a class="new badge blue modal-trigger btn" href="#modal2">click</a> </td>
            </tr>
            <tr>
                <td>AA-029</td>
                <td>03/03/2022</td>
                <td>23/03/2022</td>
                <td><b class="new badge green btn" id="statusButton" >Pembayaran Selesai</b></td>
                <td><a class="new badge blue modal-trigger btn" href="#modal2">click</a> </td>
            </tr>
            </tbody>
        </table>
</div>

        <div id="modal1" class="modal">
        <div class="modal-content" id="modal1">
      <h4>AA-0294</h4>
      <div class="container" style="padding:50px;">
          <div class="row">
<div class="col s3">
      <a class="btn-floating green"><i>1</i></a>
      <p>Dokumen Diterima</p>
</div>
<div class="col s3">
      <a class="btn-floating green"><i>2</i></a>
      <p>Dokumen dalam Pengecekan</p>
</div>
<div class="col s3">
      <a class="btn-floating gray"><i>3</i></a>
      <p>Sudah selesai pengecekan</p>
</div>
<div class="col s3">
      <a class="btn-floating gray"><i>4</i></a>
      <p>Pembayaran selesai</p>
</div>
</div>
    </div>
        </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
</div>
  
    

  <script>
  var statusButton=document.getElementById("statusButton");
  statusButton.disabled="disabled";

      M.AutoInit();
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
  

    </script>
    </div>
    </body>
    </html>