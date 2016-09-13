<?php include_once "../resources/templates/header.php"; ?>

<script src="/js/login.js"></script>

</div>
<div class="center-parent">
    <div class="center-child">
        <h3 class="text text-black text-thin text-title">Login to <strong>OPEN</strong>Cloud</h3>
        <form method="post" autocomplete="off" onsubmit=" return false" id="login-form">
            <input class="text text-normal text-black username-field" type="text" name="username" placeholder="Username" /><br>
            <input class="text text-normal text-black password-field" type="password" name="password" placeholder="Password" /><br>
            <input class="text text-normal button button-big button-login button-round" type="submit" value="Login" />
        </form>
    </div>
</div>
<div class="container">

<?php include_once "../resources/templates/footer.php"; ?>
