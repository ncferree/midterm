<?php
    function get_all_types() {
        global $db;
        $query = 'SELECT type FROM type';
        $statement = $db->prepare($query);
        $statement->execute();
        $types = $statement->fetchAll();
        $statement->closeCursor();
        return $types;
    }

    function delete_type() {
        global $db;
        $query = 'DELETE FROM make WHERE makeID = :makeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':makeID','$makeID');
        $statement->execute();
        $statement->closeCursor();
    }

    function add_type($typeID, $addtype) {
        global $db;
        $query = 'INSERT INTO type (typeID, type) VALUES (:typeID, :addtype)';
        $statement = $db->prepare($query);
        $statement->bindValue(':typeID','$typeID' );
        $statement->bindValue(':type','$addtype' );
        $statement->execute();
        $statement->closeCursor();
    }
    