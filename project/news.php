<?php 
include 'includes/header.php';
include 'includes/db.php';
$qry = "SELECT * FROM news ORDER BY newsdate DESC";
$result = mysqli_query($con, $qry);
?>

<div class="news-container">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="news">
        <img src="images/<?php echo $row['photopath']; ?>" alt="">
        <p><?php echo $row['newsdate']; ?></p>
        <h4><?php echo $row['title']; ?></h4>
        <a href="">Read News</a>
    </div>
    <?php } ?>
</div>

<?php include 'includes/footer.php'; ?>