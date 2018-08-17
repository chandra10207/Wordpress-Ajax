 <?php
//localize script
wp_enqueue_script('your_script_id', get_template_directory_uri() . '/js/custom.js', array('jquery-js'));
wp_localize_script('your_script_id', 'your_variable', array(
    'ajax_url'          => admin_url('admin-ajax.php'),
    'custom_data' => data,
    'home_url'            => home_url(),
));

// Add your action
add_action('wp_ajax_your_action', 'your_function');
add_action('wp_ajax_nopriv_your_action', 'your_function');
function your_function()
{
    global $wpdb, $product, $post;

    $data1 = $_POST['other_data1'];

    $data  = 'Hello World'; // Your data
    echo $data;
    wp_die();
}


//for more details
//https://www.smashingmagazine.com/2011/10/how-to-use-ajax-in-wordpress/