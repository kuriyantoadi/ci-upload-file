<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>Membuat upload file</h1>
    </center>
    <ul>
      <?php foreach ($upload_data as $item => $value): ?>
      <li><?= $item; ?>:  <?= $value; ?></li>
      <?php endforeach ?>
    </ul>


  </body>
</html>
