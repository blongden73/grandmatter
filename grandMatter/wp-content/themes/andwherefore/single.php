<?php
    if(in_category('artist_v2')){ //checks if is new artist
        get_template_part('artist-single');
    }elseif(in_category('events-and-workshops')){ //checks if is new artist
        get_template_part('news-single');
    }elseif(in_category('gallery')){ //checks if is new artist
        get_template_part('gallery-single');
    }elseif(in_category('interview')){ //checks if is new artist
        get_template_part('interview-single');
    }elseif(in_category('article')){ //checks if is new artist
        get_template_part('article-single');
    }else{ //if its not it uses the basic page template
        get_template_part('standard-page');
    }
?>
