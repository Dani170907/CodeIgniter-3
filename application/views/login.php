<h1>Log In Page</h1>

<form action="<?= base_url() ?>Login/verification" method="post">
    <label for="username">UserName</label>
    <input type="text" name="username" placeholder="Masukkan UserName">
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="" placeholder="Masukkan Password"><br><br>
    <button type="submit">Log In</button>
</form>