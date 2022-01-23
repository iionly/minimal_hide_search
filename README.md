Minimal Hide Search for Elgg 4.0 and newer Elgg 4.X
===================================================

Latest Version: 4.0.0  
Released: 2022-01-23  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (c) iionly 2012


Description
-----------

This plugin hides the search box in the topbar from site visitors who are not logged-in. Before Elgg 3 this was done by just unextending the search/header view from the page/elements/header view of Elgg core in there's no logged-in user. On Elgg 3 it no longer works this way. Instead it's now necessary to override the search/search_box view of the bundled search plugin and prevent output of the search box if no logged-in user is found.


Install instructions
--------------------

1. If you have a previous version of the Minimal Hide Search plugin installed, disable it and then remove the plugin folder from your mod directory before copying the new version on the server,
2. Copy the plugin folder in your mod directory,
3. Enable the plugin in the admin section of your site.
