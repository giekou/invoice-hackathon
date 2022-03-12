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
                background-color: #FFFFFF;
                margin: 12px;
                font: 13px/20px normal Roboto, Helvetica, Arial, sans-serif;
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
        <?php
        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload'])) {
        //     if ($_FILES['upload_file1']['size'] <= 0) {
        //         echo 'Hey, Please choose at least one file';
        //     } else {
        //         foreach ($_FILES as $key => $value) {
        //             if (0 < $value['error']) {
        //                 echo nl2br('Error during file upload ' . $value['error'] . "\n");
        //             } else if (!empty($value['name'])) {
        //                 if (file_exists('uploads/' . $value['name'])) {
        //                     echo nl2br('Hey, File already exists at uploads/' . $value['name'] . "\n");
        //                 } else {
        //                     move_uploaded_file($value['tmp_name'], 'uploads/' . $value['name']);
        //                     echo nl2br('File successfully uploaded to uploads/' . $value['name'] . "\n");
        //                 }
        //             }
        //         }
        //     }
        // }
                            // Set Upload Path
        $target_dir = 'uploads/';
        if( isset($_FILES['fileUpload']['name'])) {
      
            $total_files = count($_FILES['fileUpload']['name']);
  
            for($key = 0; $key < $total_files; $key++) {
    
            // Check if file is selected
                if(isset($_FILES['fileUpload']['name'][$key]) 
                            && $_FILES['fileUpload']['size'][$key] > 0) {
      
                    $original_filename = $_FILES['fileUpload']['name'][$key];
                    $target = $target_dir . basename($original_filename);
                    $tmp  = $_FILES['fileUpload']['tmp_name'][$key];
                    move_uploaded_file($tmp, $target);
                    echo '<script type="text/javascript">';
                    echo 'alert("Dokumen Berhasil Diunggah")';
                    echo '</script>';
                }
    
            }
     
        }

        ?>
        <div class="container">
            <h2 class="center-align" >Unggah Dokumen Faktur</h2>

            <div class="card blue white-text" >
                <div class="card-content">
                    <p class="caption">Unggah dokumen faktur anda dalam format .pdf, .jpg, dan .png</p>
                </div>
            </div>
            <div>&nbsp;</div>
            <div class="input-field">
            <input placeholder="Kode PO" id="first_name" type="text" class="validate">
            <label for="first_name">Masukan kode purchasing order anda</label>
            </div>
            <div>&nbsp;</div>

            <h6 class="left-align" >Unggah dokumen</h6>
            <div class="divider mb-1"></div>
            <div id="container">
                <form name="upload_form" enctype="multipart/form-data" action="upload-invoice.php" method="POST">
                    <fieldset>
                        <legend>Unggah Invoice </legend>
                        <section>
                            <!-- <label>Cari Dokumen</label> -->
                            <label>
                                <input type="file" name="fileUpload[]" id="upload_file1" readonly="true"/>
                            </label>
                        </section>
                    </fieldset>
                    <div class="divider mb-1"></div>
                
                    <fieldset>
                        <legend>Unggah Goods Receive Notes (GRN) </legend>
                        <section>
                            <!-- <label>Cari Dokumen</label> -->
                            <label>
                                <input type="file" name="fileUpload[]" id="upload_file1" readonly="true"/>
                            </label>
                        </section>
                    </fieldset>
                
                    <fieldset>
                        <legend>Unggah Purchase Order (PO) Form </legend>
                        <section>
                            <!-- <label>Cari Dokumen</label> -->
                            <label>
                                <input type="file" name="fileUpload[]" id="upload_file1" readonly="true"/>
                            </label>
                        </section>
                    </fieldset>
                
                    <fieldset>
                        <legend>Unggah Dokumen Lainnya </legend>
                        <section>
                            <!-- <label>Cari Dokumen</label> -->
                            <label>
                                <input type="file" name="fileUpload[]" id="upload_file1" readonly="true"/>
                            </label>
                            <div id="moreFileUpload"></div>
                            <div style="clear:both;"></div>
                            <div id="moreFileUploadLink" style="margin-left: 10px;">
                                <a href="javascript:void(0);" id="attachMore">Tambahkan dokumen lainnya</a>
                            </div>
                        </section>
                    </fieldset>

                    <div>&nbsp;</div>
                    <footer>
                        <button class="btn waves-effect waves-light" type="submit" name="Submit">Unggah
                            <i class="material-icons right">send</i>
                        </button>
<!-- <input class="btn waves-effect waves-light" type="submit" name="upload" value="Upload"/> -->
                    </footer>  
                </form>
            
        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $("input[id^='fileUpload[]']").each(function () {
            var id = parseInt(this.id.replace("fileUpload[]", ""));
            $("#fileUpload[]" + id).change(function () {
                if ($("#fileUpload[]" + id).val() !== "") {
                    $("#moreFileUploadLink").show();
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $upload_number = 2;
        $('#attachMore').click(function () {
            //add more file
            var moreUploadTag = '';
            // moreUploadTag += '<div class="element"><label for="upload_file"' + $upload_number + '>Dokumen ' + $upload_number + '</label>';
            moreUploadTag += '<div class="element">';
            moreUploadTag += '&nbsp;<input type="file" id="upload_file' + $upload_number + '" name="fileUpload[]' + $upload_number + '"/>';
            moreUploadTag += '&nbsp;<a href="javascript:void" style="cursor:pointer;" onclick="deletefileLink(' + $upload_number + ')">Hapus</a></div>';
            $('<dl id="delete_file' + $upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow').appendTo('#moreFileUpload');
            $upload_number++;
        });
    });
</script>

<script type="text/javascript">
    function deletefileLink(eleId) {
        if (confirm("Yakin mau dihapus ?")) {
            var ele = document.getElementById("delete_file" + eleId);
            ele.parentNode.removeChild(ele);
            $upload_number--;
        }
    }
</script>