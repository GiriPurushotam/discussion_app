<div class="container">
    <h2 class="heading">Sign UP</h2>
    <form action="./server/requests.php" method="post">
        <div class="col-6 offset-sm-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="col-6 offset-sm-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        <div class="col-6 offset-sm-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="col-6 offset-sm-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="col-6 offset-sm-3 signup">
            <button type="submit" name="signup" class="btn btn-primary">Signup</button>
        </div>
    </form>
</div>