<?php
return function($site, $pages, $page) {

  // Returns mastering projects.
  $credits = $page
    ->mastering_credits()
    ->toStructure();

  // Returns individual music projects.
  $projects = $pages
    ->find( 'projects' )
    ->children()
    ->invisible();

  return compact( 'credits', 'projects' );

};
