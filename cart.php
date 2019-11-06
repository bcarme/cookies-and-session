<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
?>
<section class="cookies container-fluid">

    <h2>Cart</h2>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Article</th>
            <th>Qty</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (empty($_COOKIE)) : ?>
            <tr>
                <td>Empty cart</td>
            </tr>

        <?php else : ?>
            <?php if (isset($_COOKIE['typePecan'])) : ?>
                <tr>
                    <td>46</td>
                    <td><?= $_COOKIE['typePecan'] ?></td>
                    <td><input class="form-control" type="text" value="1" /></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($_COOKIE['TypeChip'])) : ?>
                <tr>
                    <td>36</td>
                    <td><?= $_COOKIE['TypeChip'] ?></td>
                    <td><input class="form-control" type="text" value="1" /></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($_COOKIE['typeFullChoco'])) : ?>
                <tr>
                    <td>58</td>
                    <td><?= $_COOKIE['typeFullChoco'] ?></td>
                    <td><input class="form-control" type="text" value="1" /></td>
                </tr>
            <?php endif; ?>
            <?php if (isset($_COOKIE['typeMN'])) : ?>
                <tr>
                    <td>32</td>
                    <td><?= $_COOKIE['typeMN']?></td>
                    <td><input class="form-control" type="text" value="1" /></td>
                </tr>
            <?php endif; ?>

        <?php endif; ?>
        </tbody>
    </table>
</section>


<?php require 'inc/foot.php'; ?>
