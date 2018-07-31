<?php 
    /* if(wp_is_mobile())
        echo tainacan_get_form_search(); */
?>

<div <?php if ( get_header_image() ) : ?>class="page-header header-filter clear-filter page-height" style="background-image: url('<?php header_image(); ?>')"<?php else: ?>class="page-header header-filter clear-filter align-items-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/capa.png')"<?php endif; ?>>
    <div class="container-fluid max-large p-0 ph-title-description">
        <div class="bg-white-title title-header <?php if(is_singular() || is_archive() || is_search()) { echo 'singular-title'; }?>">
            <h1 class="mb-0 text-truncate">
                <?php 
                    if(is_home()) { ?> Blog <?php bloginfo('title'); }
                    elseif(is_singular()) { 
                        /* echo mb_strimwidth(get_the_title(),0,25,'...'); */
                        the_title(); 
                    }
                    elseif(is_archive()) { echo get_the_archive_title(); }
                    elseif(is_search()){ 
                        _e('Search Results for ', 'tainacan-theme');
                        the_search_query();
                    }
                
                ?>
            </h1>
            <?php if(is_home()) {?> <span><?php bloginfo('description'); }?></span>
        </div>
    </div>
</div>