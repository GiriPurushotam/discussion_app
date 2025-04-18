<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions</h1>
            <?php include('./common/db.php');
            if (isset($_GET["c-id"])) {
                $displayQuestionsQuery = " SELECT * FROM questions WHERE category_id = $cid";
            } elseif (isset($_GET['u-id'])) {

                $displayQuestionsQuery = " SELECT * FROM questions WHERE user_id = $uid";
            } elseif (isset($_GET['latest'])) {
                $displayQuestionsQuery = " SELECT * FROM questions ORDER BY id DESC";
            } elseif (isset($_GET['search'])) {
                $search = $_GET['search'];
                $displayQuestionsQuery = " SELECT * FROM questions WHERE title like '%$search%'";
            } else {
                $displayQuestionsQuery = " SELECT * FROM questions";
            }
            $result = $conn->query($displayQuestionsQuery);
            foreach ($result as $row) {
                $title = $row['title'];
                $id = $row['id'];
                echo
                "<div class='row question-list'>
        <h4><a href='?q-id=$id'>$title</a></h4>
        </div>";
            }
            ?>

        </div>
        <div class="col-4">
            <?php include("categoryList.php"); ?>
        </div>
    </div>
</div>