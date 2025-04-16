<select class="form-control" name="category" id="category">
    <option value="">Select A Category</option>
    <?php
    include('./common/db.php');
    $categoryQuery = "SELECT * FROM category";
    $result = $conn->query($categoryQuery);
    foreach ($result as $row) {
        $name = ucfirst($row['name']);
        $id = $row['id'];

        echo  "<option value=$id>$name</option>";
    }
    ?>
</select>