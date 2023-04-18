<?php
    require_once("action/LoginAction.php");

    $action = new LoginAction();
    $data = $action->execute();

    $pageName = "login.php";

    require_once("partial/header.php");
?>
 
<h1>WELCOME TO MARTINAISE</h1>
    <?php
        if ($data["hasConnectionError"]) {
            ?>
            <div class="error-div">ERROR: <strong>YOU ARE NO POLICE OFFICER, SIR</strong></div>
            <?php
        }
    ?>
<div class="login-form-frame">
    <form action="login.php" method="post">
        <div class="form-label">
            <label for="username">AGENT </label>
        </div>
        <div class="form-input">
            <input type="text" name="username" id="username" value="" />
        </div>
        <div class="form-separator"></div>

        <div class="form-label">
            <label for="password">BADGE NUMBER </label>
        </div>
        <div class="form-input">
            <input type="password" name="password" id="password" value="" />
        </div>
        <div class="form-separator"></div>

        <div class="form-input">
            <button type="submit">CONNEXION</button>
        </div>
        <div class="form-separator"></div>
    </form>

</div>

<?php
    require_once("partial/footer.php");