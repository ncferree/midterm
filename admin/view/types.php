<?php include('./headeradmin.php'); ?>

<h1>Types</h1>

<section>
    <form class="select" action="." method="post">
        <label>Add a Type</label>
        <input type="text" name="addtype" value=<?php $addtype; ?>>
        <input type="submit" value="Submit">
    </form>
    <?php if($types) { ?>
    <?php foreach ($types as $type) : { ?>
        <div class="">
            <div class="">
                <p class=""><?=$type['type'] ?></p>
            </div>
    <form action="." method="post">
        <input type="hidden" name="action" value="delete_type">
        <input type="hidden" name="itemNum" value="<?= $type['type'] ?>">
        <button class="">❌</button>
        </div>
    </form>
    <?php } ?>
    <?php endforeach; ?>
</section>
<?php } else { ?>
<p>No types created yet.</p>
<?php } ?>

<?php include('./footeradmin.php'); ?>