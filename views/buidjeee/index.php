<?php
/**
 * @var         $this yii\web\View
 * @var array   $list
 * @var         $pages
 * @var boolean $sort_active_login
 * @var boolean $sort_active_email
 * @var boolean $sort_active_status
 */

use yii\widgets\LinkPager;

$title = 'Buidjee main';

$this->title = $title;

?>

    <h1><?= $title ?></h1>

<?php if (!empty($list)): ?>
    <div class="task_list">
        <a class="btn btn-primary mt-4" href="/buidjeee/user/create/">Create new-&gt;</a>
        <div class="sort content mt-4">
            <h2>Sort:</h2>
            <div class="sort_list">
                <a href="?sort=login" class="btn <?= $_GET['sort'] == 'login' ? 'btn-dark' : 'btn-primary' ?>">
                    by name
                </a>
                <a href="?sort=email" class="btn <?= $_GET['sort'] == 'email' ? 'btn-dark' : 'btn-primary' ?>">
                    by email
                </a>
                <a href="?sort=status" class="btn <?= $_GET['sort'] == 'status' ? 'btn-dark' : 'btn-primary' ?>">
                    by status
                </a>
                <a href="?" class="btn btn-primary">
                    X
                </a>
            </div>
        </div>

        <?php foreach ($list as $item): ?>
            <div class="item">
                <div class="top">
                    <span class="name"><i><?= $item['login'] ?></i></span>
                    <span class="num"><b><?= $item['id'] ?></b></span>
                </div>
                <div class="center input-group">
                    <div class="text"><?= $item['task_text'] ?></div>
                </div>
                <div class="bot input-group">
                   <span class="mail">
                      <i><?= $item['email'] ?></i>
                   </span>
                    <span class="status"><b><?= $item['status'] ?></b></span>
                </div>
            </div>
        <?php endforeach; ?>

        <?= LinkPager::widget([
            'pagination' => $pages,
        ]); ?>
    </div>
<?php else: ?>
    <div class="task_list">
        List is empty.
    </div>
<?php endif; ?>