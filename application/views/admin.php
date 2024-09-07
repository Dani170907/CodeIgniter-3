<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>

    <a href="<?php echo base_url('AddStudent'); ?>">Add Data</a>

    <h1>Students Data</h1>

    <table class="customers">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>NIS</th>
            <th>Status</th>
            <th>Address</th>
            <th>Date Of Birth</th>
            <th>Action</th>
        </tr>
        <?php foreach ($tb_students as $student) : ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['nama'] ?></td>
            <td><?= $student['nis'] ?></td>
            <td><?= $student['status'] ?></td>
            <td><?= $student['alamat'] ?></td>
            <td><?= $student['tanggal_lahir'] ?></td>
            <td>
                <a href="<?= base_url();?>Admin/edit/<?= $student['id']; ?>">Edit</a> | 
                <a href="<?= base_url();?>Admin/delete/<?= $student['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
