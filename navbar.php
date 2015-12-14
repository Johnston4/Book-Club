<?php
$nav = array(
    "book_clubs" => array('link_text' => 'Book Clubs', 'link_url' => 'book_clubs.php'),
    "book_lists" => array('link_text' => 'Book Lists', 'link_url' => 'book_lists.php'),
    "book_nooks" => array('link_text' => 'Book Nooks', 'link_url' => 'book_nooks.php'),
    "calendar" => array('link_text' => 'Calendar', 'link_url' => 'calendar.php')
);
?>

<div class="nav_container">
    <img class="logo" src="images/bookniche_logo.png">
    <div class="nav_div">

        <ul class="nav_ul">
            <?php
            foreach ($nav as $key => $value) {
                ?>
                <li class="nav_li">
                    <a href="index.php?page=<?=$key;?>"><?=$value['link_text'];?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>

</div>

