<?php
    require_once("action/StatsAction.php");
    require_once("action/DAO/PopularityDAO.php");

    $action = new StatsAction();
    $data = $action->execute();

    $pageName = "stats.php";

    require_once("partial/header.php");
?>

<script defer src="js/archives.js"></script>

<a href="lobby.php"><= LOBBY</a> 
<div class="title-div">THE ARCHIVES</div>


<div id="main-container">
    <div class="favorites-container">
        
    </div>
</div>

<div>
    <button class="with-players">BY PLAYERS</button>
    <button class="without-players">BY POPULARITY</button>
    <button class="clear-data">CLEAR DATABASE</button>
</div>


<?php
    require_once("partial/footer.php");