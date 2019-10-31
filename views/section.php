<?php
/**
 * @var $data string
 * @var $users UserDataProvider
 */
?>
<div class="container">
    <div class="table-wrap">
        <h1>Пользователи</h1>
        <table class="table" id="mainTable" data-sort="ASC" data-page="1" data-field="user_name">
            <thead>
            <tr>
                <th scope="col"><a href="#" class="sortField" data-field="user_name"><i class="fa fa-arrows-v"
                                                                                        aria-hidden="true"></i>
                        username</a></th>
                <th scope="col"><a href="#" class="sortField" data-field="email"><i class="fa fa-arrows-v"
                                                                                    aria-hidden="true"></i>
                        email</a></th>
                <th scope="col"><a href="#" class="sortField" data-field="meta_value"><i class="fa fa-arrows-v"
                                                                                         aria-hidden="true"></i>
                        role</a></th>
            </tr>
            </thead>
            <tbody id="tBody">
                <?= $data ?>
            </tbody>
        </table>
        <div class="pagination">
            <?php for ($i = 1; $i <= $users->getPageCount(); $i++): ?>
                <a href="#" <?= $i == $users->currentPage ? 'class="active"' : '' ?>><?= $i ?></a>
            <?php endfor; ?>
        </div>
    </div>

</div>