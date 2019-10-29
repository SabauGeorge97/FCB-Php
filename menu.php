
<?php
define("TITLE","TROPHIES | FCB");
include('includes/header.php');
?>

<div id="menu-items">

    <h1>Our Honours</h1>
    <p>Very few clubs anywhere in the world have won so many titles. The club's greatest pride and joy remain the five European Cup titles won in Wembley (1992, 2011), Paris (2006), Rome (2009), Berlin (2015) the FIFA Club World Cup (2009, 2011 and 2015)</p>
    <p><em>Click any trophie to learn more about it.</em></p>
    
    <hr>

    <ul>
        <?php
        foreach ($trophieItems as $troph => $item) { 
        ?>

        <li><a href="dish.php?item=<?php echo $troph; ?>"><?php echo $item['number']; ?> <?php echo $item['title']; ?></a></li>
        <?php } ?>


  
    </ul>

</div> <!-- Trophies items -->

<?php include('includes/footer.php'); ?>