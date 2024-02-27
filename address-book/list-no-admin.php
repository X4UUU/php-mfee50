<?php
require __DIR__ . '/parts/pdo-connect.php';
$title = '通訊錄列表';
$pageName = 'list';
//透過pdo去執行SQL
#$rows = $pdo->query("SELECT * FROM address_book LIMIT 5,10")->fetchAll();
/*LIMIT 索引值,往後取5筆*/
#使用到三元運算子
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}


#計算每一頁有幾筆
$perPage = 30;
#計算總筆數
$t_sql = "SELECT COUNT(1) FROM address_book";
/*用count只會取得1筆*/
$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage); #得出總頁數
if ($totalRows > 0) {
    #有資料時，才往下進行
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
}
#取得分頁的資料
$sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item" href="?page=<?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=1">
                            <i class="fa-solid fa-angles-left"></i>
                        </a>
                    </li>
                    <li class="page-item" href="?page=<?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                    <?php for ($i = $page - 5; $i <= $page + 5; $i++): ?>
                        <?php if ($i >= 1 and $i <= $totalPages): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                        <?php endif ?>
                    <?php endfor ?>
                    <li class="page-item" href="?page=<?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item" href="?page=<?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $totalPages ?>">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!--table樣式可以修改，參考url(https://getbootstrap.com/docs/5.3/content/tables/)-->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        
                        <th>#</th>
                        <th>姓名</th>
                        <th>Email</th>
                        <th>手機</th>

                    </tr>
                </thead>
                <tbody>
                    <?php /*
# PHP 區塊註解
*/
                    ?>
                    <?php foreach ($rows as $r /*r代表一筆*/): ?>
                        <tr>
                            
                            <td>
                                <?= $r['sid'] ?>
                            </td>
                            <td>
                                <?= $r['name'] ?>
                            </td>
                            <td>
                                <?= $r['email'] ?>
                            </td>
                            <td>
                                <?= $r['mobile'] ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php' ?>
<script>
    //這個用法讓JS去倒資料出來，不建議使用
    const myRows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE) ?>;


</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>