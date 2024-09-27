<?= $this->session->flashdata('message') ?>

<h1>Form Login</h1>
<form action="<?= base_url() ?>Login/authenticate" method="post">
    <label for="username">UserName</label>
    <input type="text" name="username" placeholder="Masukkan UserName">
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="" placeholder="Masukkan Password"><br><br>
    <button type="submit">Log In</button>
</form>
<p>Don't have account?<a href="<?= base_url(); ?>Registration">Daftar</a></p>