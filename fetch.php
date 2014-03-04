<?php
/**
 * Get data via remote server
 * 
 * Calling
 * <code>
 * $result = include 'fetch.php';
 * </code>
 * 
 * Format of return array
 * <code>
 * array(
 *     'eefocus' => array(
 *         'title'       => ...,
 *         'description' => ...,
 *         'image'       => ...,
 *         'url'         => ...,
 *     ),
 *     'cndzz'   => array(...),
 *     'eeboard' => array(...),
 *     'moore'   => array(
 *         ...
 *         'image' => array('image_50*50' => ..., 'image_480*270' => ...),
 *     ),
 * )
 * </code>
 * @param string $uri
 * @return array
 */
function get($uri)
{
    $options = array(
        'http'  => array(
            'method'    => 'GET',
            'header'    => 'User-Agent: Mozilla/5.0\n',
        ),
    );
    $context = stream_context_create($options);
    $result  = file_get_contents($uri, false, $context);
    $result  = strip_tags($result);
    $result  = json_decode($result, true);
    
    return $result;
}

$result = array();
// URL of remote API
$urls   = array(
    'eefocus' => 'http://www.eefocus.com/article/index/hot',
    'cndzz'   => 'http://www.cndzz.com/api/api.php?action=recentDiagrams',
    'moore'   => 'http://dev.qa.moore8.com:3000/course_api/entrance_list',
    'eeboard' => 'http://www.eeboard.com/api/get-new-article.php',
);
// Fields map
$meta = array(
    'eefocus' => array(
        'title'       => 'subject',
        'description' => 'summary',
        'image'       => 'image',
        'url'         => 'url',
    ),
    'cndzz'   => array(
        'title'       => 'title',
        'description' => 'summary',
        'image'       => 'featured',
        'url'         => 'link',
    ),
    'moore'   => array(
        'title'       => 'title',
        'image'       => 'images',
        'url'         => 'url',
    ),
    'eeboard' => array(
        'title'       => 'title',
        'description' => 'excerpt',
        'image'       => 'image',
        'url'         => 'url',
    ),
);

// Get data
foreach ($urls as $site => $url) {
    $rowset = get($url);
    foreach ($rowset as $key => $row) {
        foreach ($meta[$site] as $src => $desc) {
            $result[$site][$key][$src] = $row[$desc];
        }
    }
    unset($rowset);
}

return $result;
