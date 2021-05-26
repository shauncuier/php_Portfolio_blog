
<?php
$active=basename($_SERVER["PHP_SELF"]);
switch ($active){
    case "index.php":
        $home = "active";
        break;

    case "about.php":
        $about = "active";
        break;

    case "portfolio.php":
        $portfolio = "active";
        break;

    case "blog.php":
        $blog = "active";
        break;

    case "blog-post.php":
        $blog = "active";
        break;

    case "contact.php":
        $contact = "active";
        break;
    case "admin/login.php":
        $admin = "active";
        break;

    default:
        $title = "";
        break;
}
?>

<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box <?php echo $home ?>">
            <i class="fa fa-home"></i>
            <a href="index.php">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box <?php echo $about ?>">
            <i class="fa fa-user"></i>
            <a href="about.php">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box <?php echo $portfolio ?>">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.php">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box <?php echo $blog ?>">
            <i class="fa fa-comments"></i>
            <a href="blog.php">
                <h2>Blog</h2>
            </a>
        </li>
        <li class="icon-box <?php echo $contact ?>">
            <i class="fa fa-envelope-open"></i>
            <a href="contact.php">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box <?php echo $admin ?>">
            <i class="fa fa-user"></i>
            <a target="_blank" href="admin/login.php">
                <h2>Admin</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="<?php echo $home ?>"><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li class="<?php echo $about ?>"><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                <li class="<?php echo $portfolio ?>"><a href="portfolio.php"><i class="fa fa-briefcase"></i><span>Portfolio</span></a></li>
                <li class="<?php echo $contact ?>"><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="<?php echo $blog ?>"><a href="blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                <li class="<?php echo $admin ?>"><a target="_blank" href="admin/login.php"><i class="fa fa-user"></i><span>Admin</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>