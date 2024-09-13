/* -------- Hide admin URL -------- */
function redirect_to_nonexistent_page()
{

  $new_login =  'replace_with_a_random_string';
  if (strpos($_SERVER['REQUEST_URI'], $new_login) === false) {
    wp_safe_redirect(home_url('noadminpagehere'), 302);
    exit();
  }
}
add_action('login_head', 'redirect_to_nonexistent_page');

function redirect_to_actual_login()
{

  $new_login =  'replace_with_a_random_string';
  if (parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) == $new_login && ($_GET['redirect'] !== false)) {
    wp_safe_redirect(home_url("wp-login.php?$new_login&redirect=false"));
    exit();
  }
}
add_action('init', 'redirect_to_actual_login');
