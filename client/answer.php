<div class="container">
    <div class="offset-sm-1">
        <h5>Answers:</h5>
        <?php
        $answer = " SELECT * FROM answers WHERE question_id = $qid";
        $result = $conn->query($answer);
        foreach ($result as $row) {
            $answer = $row['answer'];

            echo "<div class='row'> 
        <p class='answer-wrapper'>$answer</p>
        </div>";
        }
        ?>
    </div>
</div>