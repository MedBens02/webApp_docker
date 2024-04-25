<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
</head>
<body>
    <h1>Welcome to My Website! 2 test</h1>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <h2>Latest News</h2>
    
    <?php
	$connect = mysqli_connect(
	    'db', # service name
	    'myuser', # username
	    'password', # password
	    'mydb' # db table
	);

	$table_name = "news";

	$query = "SELECT * FROM $table_name";

	$response = mysqli_query($connect, $query);

	echo "<strong>$table_name: </strong>";
	while($i = mysqli_fetch_assoc($response))
	{
	    echo "<p>".$i['title']."</p>";
	    echo "<p>".$i['content']."</p>";
	    echo "<p>".$i['creationDate']."</p>";
	    echo "<hr>";
	}

    $news = "Some latest news here.";
    echo $news;
    ?>

    <footer>
        <p>&copy; My Website. All rights reserved.</p>
    </footer>
</body>
</html>
