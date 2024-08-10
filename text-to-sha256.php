<?php
/**
 * Plugin Name: Text to SHA256 Converter
 * Description: Converts text to SHA256 and provides an API endpoint for conversion.
 * Version: 1.0
 * Author: Rohit Kumar
 */

add_action('rest_api_init', function () {
    register_rest_route('text-to-sha256/v1', '/convert/', array(
        'methods' => 'POST',
        'callback' => 'convert_text_to_sha256',
        'permission_callback' => '__return_true',
    ));
});


function convert_text_to_sha256(WP_REST_Request $request) {
    $parameters = $request->get_json_params();
    $text = isset($parameters['text']) ? $parameters['text'] : '';

    if (empty($text)) {
        return new WP_REST_Response(array('error' => 'No text provided'), 400);
    }

    $sha256 = hash('sha256', $text);

    return new WP_REST_Response(array('sha256' => $sha256), 200);
}