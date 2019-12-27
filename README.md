# Opt Out Gutenberg
A very simple and lightweight plugin that disables the Gutenberg block editor and restores the Classic editor in WordPress for all post types. There are no settings to mess around with. Just install and activate.

## What makes this plugin different?
There are several plugins available in the WordPress Plugin Directory for disabling the Gutenberg block editor. However, some are overly complicated to use. Others leave traces of Gutenberg in the ```<head></head>``` tags of your WordPress website source code specifically ```'wp-block-library-css'``` and ```'wp-block-library-theme-css'```. 

This plugin aims to fix that. Once activated, this plugin will restore the classic editor in your WordPress backend and will also remove ```'wp-block-library-css'``` and ```'wp-block-library-theme-css'``` between the ```<head></head>``` tags of your WordPress website in the frontend. 

By not loading these two CSS files, your website will load faster. That’s two less requests per website visit. That may not sound like much but if you have 1000 visitors a day on your website, that’s 60,000 fewer requests per month which is significant.

## Installation
1. After you download it, unzip the plugin files.
2. Upload the entire plugin folder to the "/wp-content/plugins/" directory of your WordPress installation.
3. Activate the plugin through the "Plugins" menu in WordPress.

## Screenshots
There are no screenshots because this plugin does not add anything to the WordPress backend. 

## Changelog
Version 1.0.0 - First plugin release.

