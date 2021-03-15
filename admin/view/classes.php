<?php include('./headeradmin.php'); ?>

<h1>Classes</h1>

<section>
    <form class="select" action="." method="post">
        <label>Add a Class</label>
        <input type="text" name="addclass" value=<?php $addclass; ?>>
        <input type="submit" value="Submit">
    </form>
    <?php if($classes) { ?>
    <?php foreach ($classes as $class) : { ?>
        <div class="">
            <div class="">
                <p class=""><?=$class['class'] ?></p>
            </div>
    <form action="." method="post">
        <input type="hidden" name="action" value="delete_class">
        <input type="hidden" name="class" value="<?= $class['class'] ?>">
        <button class="">❌</button>
        </div>
    </form>
    <?php } ?>
    <?php endforeach; ?>
</section>
<?php } else { ?>
<p>No classes created yet.</p>
<?php } ?>

<?php include('./footeradmin.php'); ?>