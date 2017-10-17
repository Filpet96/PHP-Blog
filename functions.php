<?php
declare(strict_types=1);

require(__DIR__ . '/post.php');


function sortByDate($posts, $posts1) {

    return strtotime($posts['Published']) <  strtotime($posts1['Published']);
   }
   usort($posts, 'sortByDate')

 ?>
