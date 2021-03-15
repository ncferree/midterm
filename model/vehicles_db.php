<?php
    function get_all_vehicles() {
        global $db;
        $query = 'SELECT V.year, V.model, V.price, M.make, T.type, C.class FROM
        vehicles V INNER JOIN make M ON v.makeID = m.makeID INNER JOIN type T ON v.typeID = T.typeID INNER JOIN class C ON v.classID = c.classID WHERE vehicleID > 0 ORDER BY
        V.price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function delete_vehicle() {
        global $db;
        $query = 'DELETE FROM vehicles WHERE vehicleID = :vehicleID';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleID','$vehicleID');
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($vehicleID, $year, $model, $price, $makeID, $typeID, $classID) {
        global $db;
        $query = 'INSERT INTO vehicles V make M class C  VALUES (:vehicleID :year :model :price :makeID :typeID :classID)';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleID','$vehicleID' );
        $statement->bindValue(':year','$year' );
        $statement->bindValue(':model','$model' );
        $statement->bindValue(':price','$price' );
        $statement->bindValue(':makeID','$makeID' );
        $statement->bindValue(':typeID','$typeID' );
        $statement->bindValue(':classID','$classID' );
        $statement->execute();
        $statement->closeCursor();
    }
    
/*

    function get_all_vehicles_by_year($year, $sort) {
        global $db;
        $query = 'SELECT * FROM vehicles V INNER JOIN make M ON v.makeID = m.makeID INNER JOIN type T ON v.typeID = T.typeID INNER JOIN class C ON v.classID = c.classID
                                WHERE vehicleID > 0 ORDER BY year DESC ';
        $statement = $db->prepare($query);
        $statement-> bindValue(':makeID', '$make_ID');
        $statement-> bindValue(':typeID', '$type_ID');
        $statement-> bindValue(':classID', '$class_ID');
        $statement-> bindValue(':year', '$sort');
        $statement->execute();
        $vehicles_by_year = $statement->fetchALL();
        $statement->closeCursor();
        return $vehicles_by_year; 
    }

    function get_all_vehicles_by_price($price, $sort) {
        global $db;
        $query = 'SELECT * FROM vehicles V INNER JOIN make M ON v.makeID = m.makeID INNER JOIN type T ON v.typeID = T.typeID INNER JOIN class C ON v.classID = c.classID
                                WHERE vehicleID > 0 ORDER BY year DESC ';
        $statement = $db->prepare($query);
        $statement-> bindValue(':makeID', '$make_ID');
        $statement-> bindValue(':typeID', '$type_ID');
        $statement-> bindValue(':classID', '$class_ID');
        $statement-> bindValue(':price', '$sort');
        $statement->execute();
        $vehicles_by_price = $statement->fetchALL();
        $statement->closeCursor();
        return $vehicles_by_price; 
    }
   
 

    }*/