<?php
function generatePagination($total_pages, $current_page, $limit)
{
    $paginationHTML = '<div class="flex justify-between mt-4">';
    $paginationHTML .= '<ul class="pagination flex gap-4">';
    if ($current_page > 1) {
        $paginationHTML .= '<li><a href="?page=' . ($current_page - 1) . '&limit=' . $limit . '" class="prevBtn">&laquo; Previous</a></li>';
    } else {
        $paginationHTML .= '<li class="disabled"><span>&laquo; Previous</span></li>';
    }
    for ($i = 1; $i <= $total_pages; $i++) {
        $paginationHTML .= '<li class="';
        if ($i == $current_page) {
            $paginationHTML .= 'active';
        }
        $paginationHTML .= '"><a href="?page=' . $i . '&limit=' . $limit . '">' . $i . '</a></li>';
    }
    if ($current_page < $total_pages) {
        $paginationHTML .= '<li><a href="?page=' . ($current_page + 1) . '&limit=' . $limit . '" class="nextBtn">Next &raquo;</a></li>';
    } else {
        $paginationHTML .= '<li class="disabled"><span>Next &raquo;</span></li>';
    }
    $paginationHTML .= '</ul>';
    $paginationHTML .= '<div class="ml-4">';
    $paginationHTML .= '<label for="limit">Records per page:</label>';
    $paginationHTML .= '<select id="limit" name="limit" onchange="changeLimit(this.value)">';
    $options = [5, 10, 25, 50, 100];
    foreach ($options as $option) {
        $paginationHTML .= '<option value="' . $option . '"';
        if ($limit == $option) {
            $paginationHTML .= ' selected';
        }
        $paginationHTML .= '>' . $option . '</option>';
    }
    $paginationHTML .= '</select>';
    $paginationHTML .= '</div>';
    $paginationHTML .= '</div>';

    return $paginationHTML;
}
