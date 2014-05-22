# FoundationDealer

This is a WordPress dealership blog theme based on Foundation 5 by Zurb and FoundationPress.

## Requirements

*You'll need to have the following items installed before continuing.*

  * [Node.js](http://nodejs.org): Use the installer provided on the NodeJS website.
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Quickstart

```bash
cd my-wordpress-folder/wp-content/themes/
git clone git@github.com:justinfriebel/foundation-dealer.git
npm install
bower install
```

While you're working on the SCSS for your project, run:

`grunt`

By leaving grunt running in your CLI, anytime you edit a SCSS file it will automatically compile everything into the app.css file. You can then upload app.css to the webserver via FTP.

You can easily update the header, footer, and link colors in the variables.scss file.

## WordPress menu settings

In the WordPress admin section go to => Appearance => Menus => Menu Settings => check "Right Top Bar". If it's a new blog you'll need to add the menu items yourself. The "Links" section can be used to add links from the menu to the main website.

## Update theme images

Please update the transparent .png logo and homepage background images. The featured post and 6 most recent posts will need featured images setup.

#Featured posts

The featured post displayed on the homepage is the most recent post that has a category of "Featured" with a slug of "featured". Please create this category and select a post with this category to have a post show up on the homepage.

#Install plugins

Download and upload the "Categories as headings" plugin, activate it and set it up in => Appearance => Widgets. You need to drag it from "Available Widgets" to "Sidebar widgets". Please also remove all other widgets from the sidebar except for search.

## Stylesheet Folder Structure

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `scss/app.scss`: Sass imports for global config, foundation and site structure

  * `scss/config/_variables.scss`: Your custom variables
  * `scss/config/_colors.scss`: Your custom color scheme
  * `scss/config/_settings.scss`: Original Foundation 5 base settings

  * `scss/site/_structure`: Your custom site structure

  * `css/app.css`: All Sass files are minified and compiled to this file

## Script Folder Strucutre
  
  * `bower_components/`: This is the source folder where all Foundation scripts are located. `foundation update` will check and update scripts in this folder
  * `js/`: jQuery, Modernizr and Foundation scripts are copied from `bower_components/` to this directory, where they are minified and concatinated and enqueued in WordPress
  * Please note that you must run `grunt` in your terminal for the scripts to be copied. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details

## How to get started with Foundation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)

## Learn how to use WordPress

* [WordPress Codex](http://codex.wordpress.org/)

##Check for Foundation Updates? Run:
`foundation update` 
(this requires the foundation gem to be installed in order to work. Please see the [docs](http://foundation.zurb.com/docs/sass.html) for details.)