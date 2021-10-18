<?php
$db = mysqli_connect('localhost', 'eric', 'aA123456789!2') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// select the movie titles and their genre after 1990
$query = 'SELECT m.movie_name, p.people_fullname FROM movie m, people p
WHERE m.movie_leadactor = p.people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)){
    extract($row);
    echo $movie_name." || ".$people_fullname."<br/>";
}
?>
