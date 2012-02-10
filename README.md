#WP Prevent Duplicate Plugins

Removes a plugin from the list of available plugins if it's already installed. 
This code is supposed to be copied and placed in the main file of your own plugin. 
Requires php 5.3+.

##Usage

Put the code in the main file of your own plugin. Now any other plugin authors can deliver your plugin
packaged with your plugin without fear of collision of any other plugins that might also use your plugin.