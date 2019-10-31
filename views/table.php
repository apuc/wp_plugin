<?php
/**
 * @var $users UserDataProvider
 */
?>
<?php foreach ($users->getModels() as $user): ?>

    <tr>
        <td><?= $user->user_nicename ?></td>
        <td><?= $user->user_email ?></td>
        <td><?= $user->roles[0] ?></td>
    </tr>

<?php endforeach; ?>