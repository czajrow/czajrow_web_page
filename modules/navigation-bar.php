<!--Navigation Bar starts here...-->
<?php include "config/config.php" ?>

<?php
$activeTab = "";
$parts = parse_url($_SERVER['REQUEST_URI']);
if ($parts['query']) {
    parse_str($parts['query'], $query);
    $currentPage = $query['page'];
    $activeTab = $currentPage;
}
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand"
               href="./?page=home"
                <?php if ($activeTab === "home") echo ' style="color: white" ' ?>
            >Kreolia</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">
                <li class="<?php if ($activeTab === "onas") echo " active" ?>"><a href="./?page=onas">O nas</a></li>
                <li class="dropdown <?php if ($activeTab === "quest" || $activeTab === "laurkreolii") echo " active" ?>">
                    <a class="dropdown-toggle protectFromHiding"
                       data-toggle="dropdown"
                       style="cursor: pointer"
                    >Więcej <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($activeTab === "quest") echo " active" ?>"><a
                                    href="./?page=quest">Quest</a></li>
                        <li class="<?php if ($activeTab === "laurkreolii") echo " active" ?>"><a
                                    href="./?page=laurkreolii">Laur Kreolii</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if ($activeTab === "kontakt") echo " active" ?>"><a href="./?page=kontakt"><span
                                class="glyphicon glyphicon-briefcase"></span> Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
    // hide navbar when user click under it
    $('html').click(function (e) {
        if (!$(e.target).hasClass('protectFromHiding')) {
            $(".navbar-collapse").collapse('hide');
        }
    });
</script>
<!--Navigation Bar ends here...-->
