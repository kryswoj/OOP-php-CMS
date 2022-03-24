
<form action="index.php" method="POST" class="form-signin">
    <input type="hidden" name="section" value="contact">
    <input type="hidden" name="action" value="submitForm">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">
          <?= $title; ?>
        </h1>

        <p class="lead">
            <?= $content  ?>
        </p>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <textarea id="message" class="form-control" placeholder="Password" required></textarea>
        <label for="message">Password</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
</form>
