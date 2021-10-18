<?php
$db = mysqli_connect('localhost', 'eric', 'aA123456789!2') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Paco1", 1, 2021, 2, 1),
        (5, "Paco2", 1, 2021, 3, 5),
        (6, "Paco3", 1, 2021, 6, 4)';
mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Paco1"),
        (10, "Paco2"), 
        (11, "Paco3")';
mysqli_query($db,$query) or die(mysqli_error($db));

$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (5, "Paco1", 0, 1),
        (6, "Paco2", 1, 0),
        (7, "Paco3", 1, 0)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>
