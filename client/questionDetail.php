<div class="container">
    <div class="col-8">
        <h1 class="heading">Questions Details</h1>
        <?php include('./common/db.php');
        $questionDetails =  " SELECT * FROM questions WHERE id = $qid";
        $result = $conn->query($questionDetails);
        $row = $result->fetch_assoc();

        echo "<h4 class= 'margin-bottom question-title'>" . $row['title'] . "</h4>
             <p class='margin-bottom'>" . $row['description'] . "</p>";
        ?>
        <form action="./server/requests.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $qid ?>">
            <textarea class="form-control margin-bottom" name="answer" id="answer" placeholder="Your answer..."></textarea>
            <button class="btn btn-primary margin-bottom">Submit</button>
        </form>
    </div>
</div>