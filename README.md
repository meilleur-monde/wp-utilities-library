Better World Quotes Widget
==========================

Quotes Widget Plugin for [WordPress](https://wordpress.org/) creates for you a custom type Quote so you can manage your quotes independently from your other posts. You can also tag your quotes. create several widget for each of your tag.

This plugin has been generally inspired by [Srinig Quotes Collection plugin](http://srinig.com/wordpress/plugins/quotes-collection/), thank you for your work. I have adapted this plugin for my own needs, and refactored the rendering part using twig file in order to separate data and view, the data are now stored in a wordpress custom type.  

Features and Notes
------------------

* **Admin interface**: An admin interface to add, edit, import, export and generally manage the collection of quotes. 
* **Sidebar widget**: The Better World Quotes sidebar widget that will display a random quote from your collection and a refresh link at the bottom. As many number of instances of the widget can be added. Following is the list of options in the widget control panel:
	* Widget title
	* Option to show/hide quote author
	* Option to show/hide quote source
	* Turn on/off the refresh feature
	* Choose random or sequential order for refresh
	* Option to refresh the quote automatically
	* Show only quotes with certain tags
	* Specify a character limit and filter out bigger quotes
* **Shortcode**: Quotes can be displayed in a WordPress page by placing a `[quotcoll]`shortcode. Few examples are provided below. For more examples and the full list of arguments, please refer the [plugin homepage](https://www.meilleur-monde.fr/worpress/wp-quotes-widget).
	* Placing `[quotcoll]` in the page displays all quotes.
	* `[quotcoll author="Somebody"]` displays quotes authored by Somebody.
	* `[quotcoll tags="tag1,tag2,tag3"]` displays quotes tagged tag1 or tag2 or tag3, one or more or all of these
	* `[quotcoll orderby="random" limit=1]` displays a random quote
* **The templating**:you can override rendering using twig file that will be checked for existence in the active theme 
* **Included** collection of quotes is directly managed by Wordpress, using custom post type.
* **Tagging** ability to tag your quotes 

For more information, visit the [plugin homepage](https://www.meilleur-monde.fr/worpress/wp-quotes-widget).


Installation
------------

*Note:* The stable version of the plugin can be downloaded from the [WordPress plugin directory](https://wordpress.org/plugins/better-world-quotes-widget/). The latest development version can be downloaded from [GitHub](https://github.com/meilleur-monde/wp-quotes-widget), but it may not be stable. 

For working, this plugin needs two other plugins:that you must install and activate in order to activate this plugin:using the below procedure.
* [Timber Libray Plugin](https://fr.wordpress.org/plugins/timber-library/) 
* [Better World Library](https://fr.wordpress.org/plugins/better-world-library/)

### Method 1 ###

1. Go to *Plugins -> Add New* in your WordPress admin area
1. Type 'Better World Quotes Widget' in the search box available and hit the 'Enter' key
1. Locate the 'Better World Quotes Widget' plugin authored by Francois C, and click 'Install Now'

### Method 2 ###

1. Download the latest version of the plugin
1. Go to *Plugins -> Add New* in your WordPress admin area
1. Click on the 'Upload Plugin' button at the top, near 'Add Plugins'
1. Browse and select the zip file you just downloaded, and click 'Install Now'

### Method 3 ###

1. Dowload the latest version of the plugin
1. Extract the zip file
1. Using a FTP client or something similar, upload the `better-world-quotes-widget` directory to the `~/wp-content/plugins/` directory of your WordPress installation.

After installation, the plugin can be activated from *Plugins -> Installed Plugins* in your WordPress admin area. Once activated, the *Quotes* menu will be visible in your admin menu.


Links
-----

* [Plugin home page](https://wordpress.org/plugins/better-world-quotes-widget/)
* [Plugin at the WordPress plugin directory](https://wordpress.org/plugins/better-world-quotes-widget/)
* [Support at the WordPress support forums](https://wordpress.org/support/plugin/better-world-quotes-widget)
* [Development at GitHub](https://github.com/meilleur-monde/wp-quotes-widget)

