# Wordpress code to change admin URL

This code can be used to change the admin URL of wordpress.

Instead of:
yourweb.site/wp-admin
yourweb.site/wp-login.php

The admin login page will be available at the address:

yourweb.site/wp-login.php?yourrandomstring

The content of functions.php goes in the file functions.php of the child theme.

! Do not forget to replace "replace_with_a_random_string" with whatever text string of your choice. And "noadminpagehere" with the url you want the old admin login page to redirect to.
