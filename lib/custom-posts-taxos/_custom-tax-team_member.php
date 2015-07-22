<?php
//the followings create custom taxonomies and allocate them to custom posts
// they are called in basement_custom_post_init in custom-post_and_tax.php

function c_tax_team_member(){
//Type de team memberspecifies if the team member is a founder, an associate, a partner...

  $labels = array(
    'name'                => _x( 'Type de team member', 'taxonomy general name' ),
    'singular_name'       => _x( 'Type de team member', 'taxonomy singular name' ),
    'search_items'        => __( 'Chercher parmis les Type de team members' ),
    'all_items'           => __( 'Tous les Type de team members' ),
    'parent_item'         => __( 'Parent Domaine Type de team member' ),
    'parent_item_colon'   => __( 'Parent Type de team member:' ),
    'edit_item'           => __( 'Editer le profil du Type de team member' ), 
    'update_item'         => __( 'Mettre à jour le Type de team member' ),
    'add_new_item'        => __( 'Ajouter un nouveau Type de team member' ),
    'new_item_name'       => __( 'Nom du nouveau Type de team member' ),
    'menu_name'           => __( 'Type de team member' )
  );
  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'capabilities'        => array('assign_terms'),
    'publicly_queryable' =>  true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'team-member-type', 'with_front' => true)
  );
  return register_taxonomy( 'team-member-type', 'team-member', $args );
}

function c_tax_job_of_team_member(){
//Job de team member specifies if the team member is a dev, a designer, a DA, an after effect hero, you name it

  $labels = array(
    'name'                => _x( 'Job titles', 'taxonomy general name' ),
    'singular_name'       => _x( 'Job title', 'taxonomy singular name' ),
    'search_items'        => __( 'Chercher parmis les jobs titles' ),
    'all_items'           => __( 'Tous les jobs titles' ),
    'parent_item'         => __( 'Parent de job title' ),
    'parent_item_colon'   => __( 'Parent de job title:' ),
    'edit_item'           => __( 'Editer le job title' ), 
    'update_item'         => __( 'Mettre à jour le job title' ),
    'add_new_item'        => __( 'Ajouter un nouveau job title' ),
    'new_item_name'       => __( 'Nom du nouveau job title' ),
    'menu_name'           => __( 'Job title' )
  );
  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'capabilities'        => array('assign_terms'),
    'publicly_queryable' =>  true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'job-title', 'with_front' => true)
  );
  return register_taxonomy( 'job-title', 'team-member', $args );
}