<?php
    global $up_options;

    // Creating the doctype
    simplecart_create_doctype();
    echo " ";
    language_attributes();
    echo ">\n";
    
    // Creating the head profile
    simplecart_head_profile();

    /* Title Function */
    if(function_exists('up_title')):
        echo "<title>".up_title()."</title>";
    else:
        echo "<title>";
        wp_title('');
        if(!is_home())echo ' - '.get_bloginfo('name');
        echo "</title>";
    endif;
    
    /* SEO */
    do_action('up_seo');
    
    // Creating the canonical URL
    simplecart_canonical_url();
    
    // Loading the stylesheet
    simplecart_create_stylesheet();
    
    // Creating the internal RSS links
    simplecart_show_rss();
    
    // Creating the comments RSS links
    simplecart_show_commentsrss();
    
    // Creating the pingback adress
    simplecart_show_pingback();
    
    // Enables comment threading
    simplecart_show_commentreply();

    // Calling WordPress' header action hook
    wp_head();
        
?>

</head>

<?php 

if (apply_filters('simplecart_show_bodyclass',TRUE)) { 
    // Creating the body class
    $layout = $up_options->listview ? $up_options->listview : 'gridview';
    ?>
<body <?php body_class($layout); ?>>
    
<?php }

// action hook for placing content before opening #wrapper
simplecart_before(); ?>

<div id="wrapper" class="hfeed">

    <?php
    
    // action hook for placing content above the theme header
    simplecart_aboveheader(); 
    
    ?>   

    <div id="header">
    
        <?php 
        
        // action hook creating the theme header
        simplecart_header();
        
        ?>
        
    </div><!-- #header-->
    
    <?php
    
    // action hook for placing content below the theme header
    simplecart_belowheader();
    
    ?>   

    <div id="main">
    