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
        <textarea class="form-control margin-bottom" name="answer" id="answer">Your Answer...</textarea>
        <button name="answer" id="answer" class="btn btn-primary margin-bottom">Submit</button>
    </div>
</div>