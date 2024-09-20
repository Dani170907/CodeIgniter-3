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
        <input type="text" name="nis" id="nis" required><br>
        <label for="nama">Nama Siswa</label>
        <input type="text" name="nama" id="nama" required><br>
        <select name="alamat" id="">
            <option value="" disabled selected>Pilih Alamat</option>
            <option value="Pekalongan">Pekalongan</option>
            <option value="Pemalang">Pemalang</option>
            <option value="Batang">Batang</option>
            <option value="Tegal">Tegal</option>
            <option value="Karawang">Karawang</option>
        </select>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br>
        <button type="submit">Add</button>

    </form>
</body>
</html>