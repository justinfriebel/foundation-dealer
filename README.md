# FoundationDealer

This is a WordPress dealership blog theme based on [Foundation 5 by Zurb](http://foundation.zurb.com/) and [FoundationPress](http://foundationpress.olefredrik.com/).

## Requirements

*You'll need to have the following items installed before continuing.*

  * [Node.js](http://nodejs.org): Use the installer provided on the NodeJS website.
  * [Grunt](http://gruntjs.com/): Run `npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `npm install -g bower`

## Quickstart
Install WordPress on the server.

Download to your local machine.

On your local machine command line (open PowerShell if you're using Windows):
```bash
cd into-where-my-theme-downloaded
npm install
bower install
```

Upload the theme to your themes directory on the server: `wp-content/themes/` and activate the theme.

## Update theme images
Please update the transparent .png logo and homepage background images. The featured post and 6 most recent posts will need featured images setup.

## WordPress menu settings
In the WordPress admin section go to => Appearance => Menus => Menu Settings => check "Right Top Bar" and "Mobile". If it's a new blog you'll need to add the menu items yourself. The "Links" section can be used to add links from the menu to the main website.

## Blog title and description
The blog homepage text can be updated via the WordPress site title and tagline located in => Settings => General.

## Featured posts
The featured post displayed on the homepage is the most recent post that has a category of "Featured" with a slug of "featured". Please create this category and select a post with this category to have a post show up on the homepage.

## Posts && category pages
Create a new page called "Posts" with the URL of "posts" and a Template of "all posts".
Create a new page called "Categories" with the URL of "categories" and a Template of "categories".

## Install plugins
Download and upload the [Categories as headings](https://github.com/justinfriebel/categories-as-headings-wordpress-plugin-widget) WordPress plugin to `wp-content/plugins`, activate it and set it up in => Appearance => Widgets. You need to drag it from "Available Widgets" to "Sidebar widgets". Remove all other widgets from the sidebar except for search and drag search to the bottom.

## Stylesheet Folder Structure
  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/app.scss`: Sass imports for global config, foundation and site structure

  * `scss/config/_variables.scss`: Your custom variables
  * `scss/config/_colors.scss`: Your custom color scheme
  * `scss/config/_settings.scss`: Original Foundation 5 base settings

  * `scss/site/_structure`: Your custom site structure

  * `css/app.css`: All Sass files are minified and compiled to this file

## Updating SCSS and CSS
**If you are working on a website which is already live, you must download the whole theme to your computer. If you already have the theme on your computer, re-download the SCSS and app.css files so as not to overwrite someone elses changes. This is only needed if you aren't using version control for your website.**

Before you update the SCSS in your project, in the command line, in the root folder of the theme, run:

`grunt`

By leaving grunt running in your CLI, anytime you edit a SCSS file, it will automatically compile everything into the app.css file. You then upload `css/app.css` to the webserver via FTP.

You can easily update the header, footer, and link colors in the variables.scss file.

## Social buttons
Remove or add social icons and their links in the footer. You can add any missing ones from the [Foundation Icon Fonts 3](http://zurb.com/playground/foundation-icon-fonts-3) collection.

## Update favicons
New favicons can be created here: http://iconifier.net/. They are located in wp-content/themes/foundation-dealer/assets/img/icons/.

## How to get started with Foundation
* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)

## Learn how to use WordPress
* [WordPress Codex](http://codex.wordpress.org/)

## Check for Foundation Updates? Run:
`foundation update` 
(this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)

## Script Folder Strucutre
  * `bower_components/`: This is the source folder where all Foundation scripts are located. `foundation update` will check and update scripts in this folder
  * `js/`: jQuery, Modernizr and Foundation scripts are copied from `bower_components/` to this directory, where they are minified and concatinated and enqueued in WordPress
  * Please note that you must run `grunt` in your terminal for the scripts to be copied. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details