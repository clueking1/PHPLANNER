<nav class="navIt">
    <h2 class="titleNav">Plan It</h2>
    <?php 
    if(isset($_SESSION["username"])) {
            include("addOns/logOut/logOut.php");
        } else {
            include("addOns/userIcon/userIcon.php");
        }
    ?>

</nav>
