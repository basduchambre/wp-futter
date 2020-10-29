## WP Futter
===

Easily display your Instagram feed on your WordPress website, currently only works with public profiles.

This plugin:
 - Instagram feed (only public profiles)
 - to be added..

# Roadmap
---
 - Lazyload
 - Visual settings
 - Code cleanup
 - Documenting
 - Settings for rows + colums and how many recent posts

# Instructions
---

- Pull this into the plugins directory of your project either by cloning or using composer. Make sure you have [Node.js](https://nodejs.org/) and [Composer](https://getcomposer.org) installed. 
- Run `npm install`
- Run `composer install`
- For `production` Run `npm run build`
- For `local` Run `npm run build:local` to build the JS or `npm run build:local:watch` to watch JS files and build on the fly 
- Activate the plugin
- Add a `<div id="app"></div>` into your project and the sample application, it's not very exciting but it's a way to quickly scaffold a VueJS plugin.

