<?php

/*
|--------------------------------------------------------------------------
| Namespace Class Autoloader
|--------------------------------------------------------------------------
|
| This will loads any class using correct namespaces.
|
*/

spl_autoload_register('app_namespace_autoloader');
function app_namespace_autoloader($namespace)
{
    /** @var string Create directory path from called namespace */
    $namespace_path = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    /** @var string Create full file path using namespace directory path */
    $class_file_name = get_template_directory() . DIRECTORY_SEPARATOR . $namespace_path . '.php';

    /** If correct namespace file exists, include once */
    if (file_exists($class_file_name)) {
        include_once $class_file_name;
    }
}

// Init app
add_action('init', ['App\App', 'init']);

function get_asset($asset_path)
{
    return get_template_directory_uri() . "/{$asset_path}";
}

function the_asset($asset_path)
{
    echo get_asset($asset_path);
}

add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
    /** @see https://www.typeform.com/blog/ask-awesomely/facebook-event-photo-size/ */
    add_image_size('fb-thumb', 1200, 628, true); // 1200 x 628 pixels – this is the standard size
    add_image_size('fb-thumb-large', 1920, 1005, true); // 1920 x 1005 pixels – for best quality across all screen sizes

    /** @see https://developers.google.com/search/docs/appearance/structured-data/event */
    add_image_size('thumb-large', 1920, 1080, true); // 16x9 for google
    add_image_size('thumb-small', 480, 360, true); // 4x3 for google
    add_image_size('thumb-mini', 120, 120, true); // 1x1 for google
}

function my_acf_admin_head()
{
?>
    <style type="text/css">
        .acf-flexible-content .layout .acf-fc-layout-handle {
            /*background-color: #00B8E4;*/
            background-color: #202428;
            color: #eee;
        }

        .acf-repeater.-row>table>tbody>tr>td,
        .acf-repeater.-block>table>tbody>tr>td {
            border-top: 2px solid #202428;
        }

        .acf-repeater .acf-row-handle {
            vertical-align: top !important;
            padding-top: 16px;
        }

        .acf-repeater .acf-row-handle span {
            font-size: 20px;
            font-weight: bold;
            color: #202428;
        }

        .imageUpload img {
            width: 75px;
        }

        .acf-repeater .acf-row-handle .acf-icon.-minus {
            top: 30px;
        }
    </style>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

// get excerpt as excerpt
add_filter('get_the_excerpt', 'excerpt_as_excerpt', 10, 2);

function excerpt_as_excerpt($excerpt, $post)
{
    return wp_strip_all_tags($post->post_excerpt);
}

//pagination
function ilml_pagination($numpages = '')
{
    $total_pages = 1;

    if ($numpages == '') {
        global $wp_query;
        $total_pages = $wp_query->max_num_pages;
    } else {
        $total_pages = $numpages;
    }

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo '<div class="row">';
        echo '<div class="col-lg-12">';
        echo '<div class="ilml-pagination-wrapper pt-1 mt-5">';
        echo '<ul class="pagination">';

        if ($current_page > 1) {
            echo '<li><a href="' . get_pagenum_link($current_page - 1) . '" aria-label="Previous"><span aria-hidden="true"><i class="bi bi-arrow-left"></i> Previous</span></a></li>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $current_page) {
                echo '<li class="active"><a href="#">' . $i . '</a></li>';
            } else {
                echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
            }
        }

        if ($current_page < $total_pages) {
            echo '<li><a href="' . get_pagenum_link($current_page + 1) . '" aria-label="Next"><span aria-hidden="true">Next <i class="bi bi-arrow-right"></i></span></a></li>';
        }

        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

//filter yoast breadcrumb
add_filter('wpseo_breadcrumb_links', 'ilml_yoast_seo_breadcrumb_append_link');
function ilml_yoast_seo_breadcrumb_append_link($links)
{
    if (is_singular('service')) {
        $breadcrumb = [
            'url' => site_url('/services/'),
            'text' => 'Services',
        ];
        array_splice($links, 1, 0, [$breadcrumb]);
    }
    return $links;
}

// add Quote on WYSIWYG Editor
function custom_ilml_mce_buttons($buttons)
{
    if (!in_array('styleselect', $buttons)) {
        array_splice($buttons, 1, 0, 'styleselect');
    }

    return $buttons;
}
add_filter('mce_buttons_2', 'custom_ilml_mce_buttons');

function ilml_tiny_mce_init($init_array)
{
    $init_array['style_formats'] = json_encode(array(
        array(
            'title' => 'Quote',
            'block' => 'q',
        ),
    ));

    return $init_array;
}
add_filter('tiny_mce_before_init', 'ilml_tiny_mce_init');

add_filter('wp_lazy_loading_enabled', '__return_false');

// Page Link redirection
function ilovemylook_redirect_url($template)
{
    $current_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $parsed_url = parse_url($current_url);
    $query_params = isset($parsed_url['query']) ? wp_parse_args($parsed_url['query']) : '';
    $action = $query_params['page_id'] ?? '';

    switch ($action) {
        case '14': // enter page id here, here 6 is page id
            $template = __DIR__ . '/templates/template-services.php';
            break;

        case '16':
            $template = __DIR__ . '/templates/template-support-star.php';
            break;

        case '6':
            $template = __DIR__ . '/templates/template-404.php';
            break;

        case '13':
            $template = __DIR__ . '/templates/template-gallery.php';
            break;

        case '11':
            $template = __DIR__ . '/templates/template-blogs.php';
            break;

        case '27':
            $template = __DIR__ . '/templates/template-our-people.php';
            break;

        case '24':
            $template = __DIR__ . '/templates/template-contact.php';
            break;

        case '22':
            $template = __DIR__ . '/templates/template-contact.php';
            break;

        case '15':
            $template = __DIR__ . '/templates/template-services-single.php';
            break;

        case '20':
            $template = __DIR__ . '/templates/template-about.php';
            break;

        case '17':
            $template = __DIR__ . '/templates/template-privacy-policy.php';
            break;

        case '30':
            $template = __DIR__ . '/templates/template-feedback.php';
            break;

        case '18':
            $template = __DIR__ . '/templates/template-stories.php';
            break;

        case '42':
            $template = __DIR__ . '/templates/template-website-accessibility.php';
            break;

        default:
            break;
    }
    return $template;
}
add_filter('template_include', 'ilovemylook_redirect_url');

function altImg($img_id, $fallback_alt = '')
{
    $alt = get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: $fallback_alt;
    return $alt;
}

function getSrcOembed($acf_name,$post_id)
{
    // Load value.
    $iframe = get_field($acf_name,$post_id);

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];
    return $src;
}
