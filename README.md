# Posts to Posts - Exclude Parents / Children

Contributors: yaronguez  
Tags: posts-to-posts  
Tested up to: 4.8  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

Allow WordPress developers using the [Posts 2 Posts plugin](https://github.com/scribu/wp-posts-to-posts) to exclude posts that are parents or children of a specific link type when using WP Query.

## Description

Upon activating this plugin, just add a `exclude_children` or `exclude_parents` argument to WP Query constructor and specify the name of the link type:

```php
// Exclude any posts that are children of type [link_name]
$query = new WP_Query(array(
    'exclude_children' => '[link_name]',
));

// Exclude any posts that are parents of type [link_name]
$query = new WP_Query(array(
    'exclude_parents' => '[link_name]',
));
```

[link_name] is whatever you defined your Posts to Posts relationship to be. Done!


## Changelog

= 1.0 =
* Initial version
