<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    
    <h1>Edit Data</h1>
  
    <form action="<?php echo base_url() ?>Address/update" method="post">
        <input type="hidden" name="id" value="<?= $edit['id']; ?>">

        <label for="alamat"></label>
        <input type="text" id="alamat" name="alamat" value="<?= $edit['alamat']; ?>"><br>

        <label for="kode_pos"></label>
        <input type="text" id="kode_pos" name="kode_pos" value="<?= $edit['kode_pos']; ?>"><br>
       
        <button type="submit">Edit</button>
    </form>
    
</body>
</html>
