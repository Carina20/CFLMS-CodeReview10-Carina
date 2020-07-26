
<?php
echo ("<html><body>");
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "cr10_carina_biglibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if  (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n" );
}
// Escape user inputs for security
$author_id = mysqli_real_escape_string($conn, $_POST['author_id']);
$content_description = mysqli_real_escape_string($conn, $_POST[ 'content_description']);
$fk_publisher_id = mysqli_real_escape_string($conn, $_POST['publisher_id']);
$image = mysqli_real_escape_string($conn, $_POST['image']);
$isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
// attempt insert query execution
$sql = "INSERT INTO media_item (author_id, content_description, fk_publisher_id, image, isbn, title, type) VALUES ('$author_id', '$content_description', '$fk_publisher_id','$image', '$isbn', '$title', '$type')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created.<h1>";
} else {
    echo "<h1>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
}
mysqli_close($conn);
echo  "</body></html>";
?>