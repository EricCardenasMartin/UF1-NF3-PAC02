<?php
$db = mysqli_connect('localhost', 'eric', 'aA123456789!2') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'ALTER TABLE movie
ADD CONSTRAINT FK_Leadactor 
FOREIGN KEY (movie_leadactor) REFERENCES people(people_id)';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Foreign key added!';
?>
