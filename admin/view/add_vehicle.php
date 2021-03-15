<?php include('./headeradmin.php'); ?>

<h1>Add a Vehicle to the Inventory</h1>
<section>

    <form class="select" action="." method="post">
        <div class="mb-3">        
            <label for="exampleFormControlInput1" class="form-label">Year: </label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Year " type="text" name="year" value=<?php $add_vehicle; ?>>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Model: </label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Model "type="text" name="model" value=<?php $add_vehicle; ?>>
           
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price: </label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Price" type="text" name="price" value=<?php $add_vehicle; ?>>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Make: </label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Make" type="text" name="make" value=<?php $add_vehicle; ?>>
            <select>
                <option><?php foreach ($makes as $make) : ?></option>
            </select>
            <?php endforeach ; ?>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Type: </label>
            <input required class="form-control" id="exampleFormControlInput1" placeholder="Type" type="text" name="type" value=<?php $add_vehicle; ?>>
            <select>
                <option><?php foreach ($types as $type) : ?></option>
            </select>
            <?php endforeach ; ?>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Class: </label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="Class" type="text" name="class" value=<?php $add_vehicle; ?>>
            <select>
                <option><?php foreach ($classes as $class) : ?></option>
            </select>
            <?php endforeach ; ?>
        </div>
        <div class="mb-3">
        <input type="submit" value="Submit">
        </div>
    </form>

<?php include('./footeradmin.php'); ?>