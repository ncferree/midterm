<?php include('./headeradmin.php'); ?>

<h1>Makes</h1>
<section>
    <form class="select" action="." method="post">
        <label>Add a Make</label>
        <input type="text" name="addmake" value=<?php $addmake; ?>>
        <input type="submit" value="Submit">
    </form>
    <?php if($makes) { ?>
    <?php foreach ($makes as $make) : { ?>
        <div class="">
            <div class="">
                <p class=""><?=$make['make'] ?></p>
            </div>
    <form action="." method="post">
        <input type="hidden" name="action" value="delete_make">
        <input type="hidden" name="itemNum" value="<?= $delete_make['makeID'] ?>">
        <button class="">❌</button>
        </div>
    </form>
    <?php } ?>
    <?php endforeach; ?>
</section>
<?php } else { ?>
<p>No makes created yet.</p>
<?php } ?>

<?php include('./footeradmin.php'); ?>