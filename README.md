# Posts to Posts - Exclude Parents / Children

Contributors: yaronguez
Donate link: http://trestian.com
Tags: posts-to-posts
Tested up to: 4.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow developers to exclude posts that are Posts 2 Posts parents or children of a specific link type from a WP Query.

## Description

Upon activating this plugin, just modify your use of WP Query as follows:

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
