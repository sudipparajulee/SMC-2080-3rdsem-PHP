<?php include 'header.php'; ?>

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

    <tr>
        <td>1</td>
        <td>National</td>
        <td>
            <a href="" class="edit-btn">Edit</a>
            <a href="" class="delete-btn">Delete</a>
        </td>
    </tr>

    <tr>
        <td>2</td>
        <td>International</td>
        <td>
            <a href="" class="edit-btn">Edit</a>
            <a href="" class="delete-btn">Delete</a>
        </td>
    </tr>
</table>

<?php include 'footer.php'; ?>