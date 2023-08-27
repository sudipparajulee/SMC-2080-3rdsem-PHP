<?php include 'header.php'; 
include '../includes/db.php';

$qry = "SELECT * FROM categories ORDER BY priority";
$result = mysqli_query($con, $qry);
?>

<div class="menu-heading">
    <h1>Categories</h1>
    <hr>
</div>

<div class="add-btn">
    <a href="createcategory.php">Add Category</a>
</div>

<table class="admin-table">
    <tr>
        <th>Priority</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['priority']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td>
            <a href="" class="edit-btn">Edit</a>
            <a href="" class="delete-btn">Delete</a>
        </td>
    </tr>

    <?php } ?>

</table>

<?php include 'footer.php'; ?>