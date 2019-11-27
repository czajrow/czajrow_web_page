<!--Navigation Bar starts here...-->
<?php include "config/config.php"?>

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
            ><?= $pagetitle['title'] ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">
                <li class="<?php if ($activeTab === "history") echo " active" ?>"><a href="./?page=history">History</a></li>
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
                <li class="<?php if ($activeTab === "kontakt") echo " active" ?>"><a href="./?page=more"><span
                                class="glyphicon glyphicon-briefcase"></span> More</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle protectFromHiding"
                       data-toggle="dropdown"
                       style="cursor: pointer"
                    >Szukaj <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="padding: 5px;">
                        <div>
                            <form action="https://www.google.com/search"
                                  class="searchform protectFromHiding"
                                  method="get"
                                  name="searchform"
                                  target="_blank">
                                <input name="sitesearch"
                                       type="hidden"
                                       value="<?= $pagetitle['host'] ?>">
                                <input autocomplete="on"
                                       class="form-control protectFromHiding"
                                       name="q"
                                       placeholder="Search in <?= $pagetitle['host'] ?>"
                                       required="required"
                                       type="text"
                                       id="searchInput">
                                <button class="button"
                                        type="submit"
                                        style="width: 100%; height: 100%; padding: 0;">Search</button>
                            </form>
                        </div>
                    </ul>
                </li>

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
