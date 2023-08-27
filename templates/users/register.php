<form method="post" action="<?= $this->Url->build(['controller' => 'Users', 'action' => 'register']) ?>">
    <h2>Register</h2>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>















