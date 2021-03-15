<?php
    function get_all_classes() {
        global $db;
        $query = 'SELECT class FROM class';
        $statement = $db->prepare($query);
        $statement->execute();
        $classes = $statement->fetchAll();
        $statement->closeCursor();
        return $classes;
    }

    function delete_class() {
        global $db;
        $query = 'DELETE FROM class WHERE classID = :classID';
        $statement = $db->prepare($query);
        $statement->bindValue(':classID','$classID');
        $statement->execute();
        $statement->closeCursor();
    }

    function add_class($classID, $addclass) {
        global $db;
        $query = 'INSERT INTO class (classID, class) VALUES (:classID, :class)';
        $statement = $db->prepare($query);
        $statement->bindValue(':classID','$classID' );
        $statement->bindValue(':class','$addclass' );
        $statement->execute();
        $statement->closeCursor();
    }
    