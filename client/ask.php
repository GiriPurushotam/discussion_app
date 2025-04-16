<div class="container">
    <h2 class="heading">Ask Your Question</h2>
    <form action="./server/requests.php" method="post">
        <div class="col-6 offset-sm-3">
            <label for="tile" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="col-6 offset-sm-3">
            <label for="description" class="form-label">Descrption</label>
            <textarea name="description" class="form-control" id="description"> </textarea>
        </div>
        <div class="col-6 offset-sm-3">
            <label for="category" class="form-label">Category</label>
            <?php include("category.php"); ?>
        </div>

        <div class="col-6 offset-sm-3 signup">
            <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
        </div>
    </form>
</div>