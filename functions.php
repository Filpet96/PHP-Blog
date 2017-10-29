<?php
declare(strict_types=1);

require(__DIR__ . '/post.php');

// Sorting posts by date, New posts first.
function sortByDate($posts, $posts1) {

    return strtotime($posts['Published']) <  strtotime($posts1['Published']);
   }
   usort($posts, 'sortByDate')

 ?>
