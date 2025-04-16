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
            <select class="form-control" name="category" id="category">
                <option value="">Mobiles</option>
                <option value="">General</option>
                <option value="">Coding</option>
            </select>
        </div>

        <div class="col-6 offset-sm-3 signup">
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>