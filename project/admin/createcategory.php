<?php include 'header.php'; ?>

<div class="menu-heading">
    <h1>Create Category</h1>
    <hr>
</div>


<form action="actioncategory.php" method="POST" class="admin-form">
    <input type="number" placeholder="Enter Priority" name="priority">
    <input type="text" placeholder="Enter Category Name" name="name">
    <div class="form-footer">
        <input type="submit" name="create" value="Add Category">
        <a href="category.php" class="exit-btn">Exit</a>
    </div>
</form>

<?php include 'footer.php'; ?>