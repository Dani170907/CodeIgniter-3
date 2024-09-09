<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    
    <h1>Edit Data</h1>
  
    <div>
    <form action="<?php echo base_url() ?>Admin/update" method="get">
        <input type="hidden" name="id" value="<?= $edit['id']; ?>">

        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" value="<?= $edit['nama']; ?>"><br>

        <label for="alamat">Address</label>
        <input type="text" id="alamat" name="alamat" value="<?= $edit['alamat']; ?>"><br>

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
    </div>

</body>
</html>
