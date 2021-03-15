<?php
    function get_all_makes() {
        global $db;
        $query = 'SELECT make FROM make';
        $statement = $db->prepare($query);
        $statement->execute();
        $makes = $statement->fetchAll();
        $statement->closeCursor();
        return $makes;
    }

    function delete_make() {
        global $db;
        $query = 'DELETE FROM make WHERE makeID = :makeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':makeID','$makeID');
        $statement->execute();
        $statement->closeCursor();
    }

    function add_make($makeID, $addmake) {
        global $db;
        $query = 'INSERT INTO make (makeID, make) VALUES (:makeID, :addmake)';
        $statement = $db->prepare($query);
        $statement->bindValue(':makeID','$makeID' );
        $statement->bindValue(':make','$addmake' );
        $statement->execute();
        $statement->closeCursor();
    }
    