<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h1>Add Data</h1>
    
    <form action="AddStudent/add" method="get">

        <label for="nis">NIS</label>
        <input type="nis" name="nis" id="nis" required><br>
        <label for="nama">Nama Siswa</label>
        <input type="text" name="nama" id="nama" required><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required><br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br>
        <button type="submit">Add</button>

    </form>
</body>
</html>