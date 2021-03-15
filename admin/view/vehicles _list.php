
<?php include('./headeradmin.php'); ?>

<section>
    <form class="select" action= "." method="get">
        <table action= "." class="table table-hover">
             <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Make</th>
                    <th scope="col">Type</th>
                    <th scope="col">Class</th>
                    <th scope="col">Remove</th>
                </tr>
                </thead>
                <tbody >
                    <tr>
                    <?php foreach ($vehicles as $vehicle) {  ?>
                         <th scope="row"><?php echo $vehicle['year']; ?></th>
                        <td><?php echo $vehicle['model']; ?></td>
                        <td><?php echo $vehicle['price']; ?></td>
                        <td><?php echo $vehicle['make']; ?></td>
                        <td><?php echo $vehicle['type']; ?></td>
                        <td><?php echo $vehicle['class']; ?></td> 
                        <td>
                            <input type="hidden" name="action" value="vehicleID">
                            <input type="hidden" name="itemNum" value="<?= $delete_vehicle['vehicleID'] ?>">
                            <button type="submit" class="">❌</button></td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </select>
    </form>

</section>
<div>
    <h4><?php echo '<a href="add_vehicle.php">Add a Vehicle</a>';?></h4>
    <h4><?php echo '<a href="makes.php">Add/Delete Makes</a>';?></h4>
    <h4><?php echo '<a href="types.php">Add/Delete Types</a>';?></h4>
    <h4><?php echo '<a href="classes.php">Add/Delete Classes</a>';?></h4>
</div>

<?php include('./footeradmin.php'); ?>


