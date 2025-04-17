<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="col-8">
        <?php include('./common/db.php');
        $displayQuestionsQuery = " SELECT * FROM questions";
        $result = $conn->query($displayQuestionsQuery);
        foreach ($result as $row) {
            $title = $row['title'];
            echo
            "<div class='row question-list'>
        <h4><a href='#'>$title</a></h4>
        </div>";
        }
        ?>

    </div>
</div>