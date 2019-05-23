<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 1-4-2019
 * Time: 09:55
 */


require 'header.php';
require 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$user = $prepare->fetch(PDO::FETCH_ASSOC);
?>
<h1>Edit User</h1>

<form action="userController.php?id=<?=$id;?>" method="post">
    <input type="hidden" name="type" value="edit">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="username" id="username" name="username" value="<?= htmlentities($user['username'])?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?= htmlentities($user['password']) ?>" required>
    </div>
    <input type="submit" id='create_button' value="Edit user">
</form>




<?php require 'footer.php'; ?>
