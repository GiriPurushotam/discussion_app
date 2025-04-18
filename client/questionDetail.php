<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions Details</h1>
            <?php include('./common/db.php');
            $questionDetails =  " SELECT * FROM questions WHERE id = $qid";
            $result = $conn->query($questionDetails);
            $row = $result->fetch_assoc();
            $cid = $row['category_id'];

            echo "<h4 class= 'margin-bottom question-title'>" . $row['title'] . "</h4>
             <p class='margin-bottom'>" . $row['description'] . "</p>";

            include('./client/answer.php');
            ?>
            <form action="./server/requests.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <textarea class="form-control margin-bottom" name="answer" id="answer" placeholder="Your answer..."></textarea>
                <button class="btn btn-primary margin-bottom">Submit</button>
            </form>
        </div>
        <div class="col-4">
            <?php
            $relatedCategory = " SELECT * FROM category WHERE id = $cid";
            $resultCategory = $conn->query($relatedCategory);
            $resultRow = $resultCategory->fetch_assoc();

            echo "<h1 class='heading'>" . ucfirst($resultRow['name']) . ' Questions' . "</h1>";

            $relatedQuestions = " SELECT * FROM  questions WHERE category_id = $cid AND id!=$qid ";
            $result = $conn->query($relatedQuestions);
            foreach ($result as $row) {
                $id = $row['id'];
                $title = $row['title'];
                $title = $row['title'];
                echo "<div class='form-control'> <h4 class='question-list'> <a href='?q-id=$id'>$title</a> </h4> </div>";
            }
            ?>
        </div>
    </div>
</div>