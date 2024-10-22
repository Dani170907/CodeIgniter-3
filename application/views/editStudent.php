<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    
    <h1>Edit Data</h1>
  
    <form action="<?php echo base_url() ?>Admin/update" method="post">
        <input type="hidden" name="id" value="<?= $edit['id']; ?>">

        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" value="<?= $edit['nama']; ?>"><br>

        <label for="alamat">Alamat</label>
        <select name="alamat">
            <option value=""> --pilih alamat-- </option>
            <?php foreach ($alamat as $al ): ?>
                <option value="<?= $al['id'] ?>"><?= $al['id'] ?></option>
            <?php endforeach;?>
        </select>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $edit['tanggal_lahir'] ?>" required><br>

        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="<?= $edit['status'] ?>"><?= $edit['status'] ?></option>
            <option value="Active">Active</option>
            <option value="Siswa Keluar">Siswa Keluar</option>
            <option value="Siswa Bermasalah">Siswa Bermasalah</option>
        </select>
    
        <button type="submit">Edit</button>
    </form>
    
</body>
</html>
