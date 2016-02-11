<?php
function the_breadcrumb() {
        echo'<div class="e-breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a>";
                if (is_category() || is_single()) {
                        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
                        the_category(' &bull; ');
                                if (is_single()) {
                                        echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                                        the_title();
                                }
        } elseif (is_page()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            echo the_title();
                } elseif (is_search()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
                        echo '"<em>';
                        echo the_search_query();
                        echo '</em>"';
        }
        echo'</div>';
    }