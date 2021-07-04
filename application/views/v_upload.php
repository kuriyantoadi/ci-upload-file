<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
  </head>
  <body>
    <center><h3>Membuat Upload File</h3></center>

    <?= $error; ?>

    <?= form_open_multipart('C_upload_pdf/aksi_upload'); ?>

    <input type="file" name="berkas" value="">
    <br><br>
    <input type="submit" name="" value="upload">
  </body>
</html>
