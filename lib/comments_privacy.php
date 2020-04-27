<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function getFormPrivacy($owner, $visitor, $vars){
    
    $user_setting = elgg_get_plugin_user_setting('comment_permission', $owner->guid, 'comments_privacy');

    
    //if ($owner->isFriendsWith($visitor))
  
  
  if($owner->guid == $visitor || $user_setting == null)
  {
      $content = elgg_view_form('comment/save', array(), $vars);
  }
  
  if($owner->guid != $visitor && $user_setting != null)
  {
      switch ($user_setting) {
          case 1:
              $content = elgg_view_form('comment/save', array(), $vars);
              break;
          case 2:
              if ($owner->isFriendsWith($visitor)){
              $content = elgg_view_form('comment/save', array(), $vars);
              }
              break;
          case 3:
              $content = '';

          default:
              break;
      }
  }
  
  return $content;
}