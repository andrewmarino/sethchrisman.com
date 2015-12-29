<?php
return function($site, $pages, $page) {

  $data = array();

  // Returns upcoming performances for home page.
  $events = $pages->find('performances')
    ->performances()
    ->toStructure()
    ->filterBy('date', '>', time());

  $data['events'] = $events;

  return $data;

};
