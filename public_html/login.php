<?php include_once "../resources/templates/header.php"; ?>

<div class="center-parent">
    <div class="center-child">
        <h3 class="text text-black text-thin">Login to <strong>OPEN</strong>Cloud</h3>
        <form method="post" autocomplete="off" onsubmit=" return false" id="login-form">
            <input class="text text-small text-black" type="text" name="username" /><br>
            <input class="text text-small text-black" type="password" name="password" /><br>
            <input class="btn btn-orange" type="submit" value="Login" />
        </form>
    </div>
</div>

<?php include_once "../resources/templates/footer.php"; ?>
