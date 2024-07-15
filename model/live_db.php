<?php
function get_lives() {
    global $db;
    $query = 'SELECT * FROM lives
              ORDER BY liveID';
    $statement = $db->prepare($query);
    $statement->execute();
    $lives = $statement->fetchAll();
    $statement->closeCursor();
    return $lives;
}



function get_live($live_id) {
    global $db;
    $query = 'SELECT * FROM lives
              WHERE liveID = :live_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':live_id', $live_id);
    $statement->execute();
    $live = $statement->fetch();
    $statement->closeCursor();
    return $live;
}


?>