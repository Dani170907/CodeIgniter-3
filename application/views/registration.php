<h1>Tambah User</h1>

<form action="<?= base_url() ?>Registration/addUser" method="post">
    <input type="text" name="username" placeholder="Masukkan Username"><br><br>
    <input type="password" name="password" placeholder="Masukkan Password"><br><br>
    <input type="email" name="email" placeholder="Masukkan Email"><br><br>
    <button type="submit">Daftar</button>
</form>