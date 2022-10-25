<?php

function getPaginate($range = 2)
{
    global $wp_query;
    global $paged;

    $showitems = ($range * 2) + 1;
    if (empty($paged)) {
        $paged = 1;
    }

    $pages = $wp_query->max_num_pages;
    if ($pages == '' || !$pages) {
        $pages = 1;
    }
    // Show the pagination section if we have more than one page
    if (1 != $pages) {
        echo '<div class="pagination-area">';

        if ($paged > 1 && $showitems < $pages) {
            echo "<a class='prev page-numbers' href='" . get_pagenum_link($paged - 1) . "'><i class='icofont-double-left'></i></a>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='page-numbers current'>" . $i . "</span>" : "<a class='page-numbers' href='" . get_pagenum_link($i) . "'>" . $i . "</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) {
            echo "<a class='next prev page-numbers' href='" . get_pagenum_link($paged + 1) . "'><i class='icofont-double-right'></i></a>";
        }
        echo "</div>";
    }
}