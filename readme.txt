=== Plugin Name ===
Contributors: jondor
Donate link: http://plugins.funsite.eu/plugin-scores/
Tags: admin,dashboard,plugin,scores
Requires at least: 3.0.1
Tested up to: 5.2
Stable tag: 1.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds an dashboard widget which shows information on your plugins.

== Description ==

This plugin retrieves the information on plugins and shows them in a widget on the dashboard page. The names of the plugins to show can be set
in an list under the plugin->myPlugins settings page.

If you want to share this table with your users that's also possible.
Just include the shortcode [plugin_scores] somewhere in a page and there you go.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the sluge names as used by the wordpress site to the settingspage.

== Frequently Asked Questions ==

= Why?? =
Why not? I like to be informed and there seemed to be an hidden api for this info.

= my plugins all show zero's =
make sure the slug name is correct. It's the name as used on the wordpress site, all lowercase and underscores replaced by dashes. (or so it seems)

== Screenshots ==

1. admin widget
2. myPlugin list

== Changelog ==
= 1.7 =
Some changes to the basic_plugin_class which, regretfully, isn't allowed to have it's own plugin anymore.

= 1.6 =
As I never noticed the requests for support in the wordpress forum I added a
column with the number of discussions there per plugin. Clicking on the
number brings you to the right page.
Also adjusted the language file

= 1.5 =
Fixed sime minor bugs

= 1.4 =
Code cleanup

= 1.3 =
Added translation support. For now there's an extra dutch translation.
Other languages are of course appriciated. I used the "CodeStyling Localization" for my translation and it worked like a dream.

= 1.2 =
Fixed the timezone for the time shown under the table. The Wordpress
timezone setting is used.

= 1.1 =
Added caching. The results are cached for half an hour. If you really want to change this time; it's defined in the header of the plugin as
define('CACHE_TIMEOUT',30*60); Just change the 30*60 (30 minutes times 60 seconds) in any time you want.

If for what reason you want to clear the cache manualy, just go to the settings page and hit save.

= 1.0 =
* First release

== Upgrade Notice ==

= 1.2 =
As the time under the table is also cached (to show when it was last
renewed) you have to press the save button in the "My Plugins" screen under
the Plugins menu. It will clear the cache.
