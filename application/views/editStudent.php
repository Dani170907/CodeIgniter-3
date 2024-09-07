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
    <form action="/action_page.php">
        <label for="nama">Name</label>
        <input type="text" id="nama" name="nama" placeholder="">

        <label for="alamat">Address</label>
        <input type="text" id="alamat" name="alamat" placeholder="">

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="alamat" id="alamat" required>

        <label for="country">Country</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>
    
        <button type="submit" value="Submit">
    </form>
    </div>

</body>
</html>