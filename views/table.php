<?php
/**
 * @var $users UserDataProvider
 */
?>
<section>
    <div class="container">
        <div class="table-wrap">
            <h1>Awesome Clean Table Design</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><a href="#"><i class="fa fa-arrows-v" aria-hidden="true"></i> username</a></th>
                    <th scope="col"><a href="#"><i class="fa fa-arrows-v" aria-hidden="true"></i> email</a></th>
                    <th scope="col"><a href="#"><i class="fa fa-arrows-v" aria-hidden="true"></i> role</a></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users->getModels() as $user): ?>

                    <tr>
                        <td><?= $user->user_nicename ?></td>
                        <td><?= $user->user_email ?></td>
                        <td><?= $user->roles[0] ?></td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#">«</a>
                <?php for($i=1; $i <= $users->getPageCount(); $i++): ?>
                <a href="#" <?= $i == $users->currentPage ? 'class="active"' : '' ?>><?= $i ?></a>
                <?php endfor; ?>
                <a href="#">»</a>
            </div>
        </div>

    </div>
</section>