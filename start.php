<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

elgg_register_event_handler('init', 'system', 'comments_privacy_init');


function comments_privacy_init() {
    elgg_register_library('elgg:comments_privacy', __DIR__ . '/lib/comments_privacy.php');
    elgg_load_library('elgg:comments_privacy');
    
}