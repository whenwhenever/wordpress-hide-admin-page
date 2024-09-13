# Wordpress code to change admin URL

This code can be used to change the admin URL of wordpress.

Instead of:
* _yourweb.site/wp-admin_
* _yourweb.site/wp-login.php_

The admin login page will be available at the address:

* _yourweb.site/wp-login.php?yourrandomstring_

The content of functions.php goes in the file functions.php of the child theme.

> [!IMPORTANT]
> Don't forget to replace "replace_with_a_random_string" with whatever text string of your choice.
> 
> And "noadminpagehere" with the url you want the old admin login page to redirect to.
