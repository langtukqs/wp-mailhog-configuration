## MailHog configuration for WordPress
This class allows for receiving WordPress emails locally via MailHog.

### How to Use?
Install and run [MailHog](https://github.com/mailhog/MailHog) on your local devices.

Copy file ``wp-mailhog-config-smtp.php`` to your active theme. 
You can create a folder called ``includes`` and put all of your
custom functions/classes there.

Include ``wp-mailhog-config-smtp.php`` in your theme's ``functions.php``:

```
include_once(get_stylesheet_directory() . '/includes/wp-mailhog-config-smtp.php');
```

To activate MailHog, add the ``WP_MAILHOG`` constant to your ``wp-config.php`` and set it to ``true``:
```
define('WP_MAILHOG', true);
```