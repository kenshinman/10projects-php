
<?php
include('database.php');
?>

<?php 
//create mysqli query
$query = 'SELECT * FROM shouts ORDER BY id DESC';
$shouts = mysqli_query($con, $query);
//var_dump ($shouts);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Shout Out Box</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>SHOUT IT! Sout box</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                
                <li class="shout"><span><?php echo $row['time']?></span> - <strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?></li>
                <?php endwhile; ?>
                
            </ul>
        </div>
        <div id="input">
           <?php if(isset($_GET['error'])):?>
        <div class="error"><?php echo $_GET['error']; ?></div>
        <?php endif; ?>
           
            <form action="process.php" method="post">
                <input type="text" placeholder="Your name" name="user" autofocus>
                <input type="text" placeholder="Your Message" name="message"><br>
                <input type="submit"  name="submit" value="Shout It out!" class="shout-button">
                
            </form>
        </div>
        
    </div>
</body>
</html>
<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quaerat error quae libero minima, vel, ex  Nisi impedit adipisci provident velit architecto eveniet numquam deserunt!-->