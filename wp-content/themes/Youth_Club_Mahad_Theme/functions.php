<?php


function youth_club_mahad_files() {

  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);


  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap',get_theme_file_uri('/css/bootstrap.css'));
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
function mahad_features(){
  add_theme_support('title-tag');
}






add_action('wp_enqueue_scripts', 'youth_club_mahad_files');
add_action('after_setup_theme', 'mahad_features');


if(null !== $_POST['btnSubmit']){
  global $wpdb;
  $data_array = array(
    'first_name'=>$_POST['firstname'],
    'last_name'=>$_POST['lastname'],
    'email'=>$_POST['email'],
    'phone'=>$_POST['phone'],
    'message'=>$_POST['message'],
  );
  $table_name = 'youthclub_member';
  $rowResult = $wpdb->insert($table_name,$data_array);

  if ($rowResult == 1) {
    echo "<h1> data saved successfully </h1>";
  }else {
    echo "<h1> ERROR!!<h1>";
  }



}
