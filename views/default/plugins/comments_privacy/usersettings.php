<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user_guid = elgg_get_logged_in_user_entity()->guid;
$privacy_setting = elgg_get_plugin_user_setting('comment_permission', $user_guid, 'comments_privacy');



echo elgg_view_input('select',[
    
    'label' => elgg_echo('comments_privacy:setting'),
    'name' => 'params[comment_permission]',
    'options_values' => array(
                
		'1' => elgg_echo('comments_privacy:public'),
                '2' => elgg_echo('comments_privacy:friends'),
                '3' => elgg_echo('comments_privacy:private'),
                
        
	),
    'required' => true,
    'value' => $privacy_setting,
]); 

