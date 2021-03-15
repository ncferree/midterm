<?php include('header.php'); ?>


<section>
    <form class="select" action= "." method="get">
    <?php foreach ($makes as $make) : ?>
        <select name="make">
            <label>View Vehicles by Make</label>
            <option value="make"><a href="?make=<?php echo $make['makeID']; ?>">
                <?php echo $make['makeID']; ?></a></option>
        <?php endforeach ; ?>
    <?php foreach ($types as $type) : ?>
        <select name="type">
            <label>View Vehicles by Type</label>
            <option value="type"><a href="?type=<?php echo $type['typeID']; ?>">
                <?php echo $type['typeID']; ?></a></option>
     
    <?php endforeach ; ?>
    <?php foreach ($classes as $class) : ?>
        <select name="class">
            <label>View Vehicles by Class</label>
            <option value="class"><a href="?class=<?php echo $class['classID']; ?>">
                <?php echo $class['classID']; ?></a></option>
    <?php endforeach ; ?>       
            <input type="submit" value="Submit">

            <table action= "." class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Make</th>
                    <th scope="col">Type</th>
                    <th scope="col">Class</th>
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
                </tr>
                    <?php } ?>
            </tbody>
    </table>

        </select>
    </form>

    <form class="form-inline" action='.' method="post">
    <label>Sort By:</label>
    <input action = "get_all_vehicles_by_year" type="radio" name="sort_by" value="year">Year<br>
    <input action = "get_all_vehicles_by_price" type="radio" name="credit_card" value="price">Price<br>
    <input type="submit" name="button" value="Submit"/>
    </form>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php include('footer.php'); ?>

