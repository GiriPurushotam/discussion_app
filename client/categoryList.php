<div class="container">
    <h1 class="heading">Category</h1>
    <?php
    include('./common/db.php');
    $category = " SELECT * FROM category";
    $result = $conn->query($category);
    foreach ($result as $row) {
        $name = $row['name'];
        $id = $row['id'];
        echo "<div class='row question-list'> 
        <h4> <a href='?q-id=$id'>$name</a> 
        </h4>
        </div>";
    }
    ?>
</div>