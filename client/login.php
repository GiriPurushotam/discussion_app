<div class="container">
    <h2 class="heading">Login</h2>
    <form action="./server/requests.php" method="post">
        <div class="col-6 offset-sm-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="col-6 offset-sm-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="col-6 offset-sm-3 signup">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>