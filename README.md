# WordPress Seed
    An opinionated WordPress starter project that tries to bring sanity to Signals' WordPress projects.

## Features
- Better WordPress folder structure
- Minimizes deploy steps to speed up builds and cut down on deployment headaches at 5:30pm on Fridays (no buildcontrol, no prod branch, or copy tasks)
- Easy WordPress configuration with environment specific files via Environment variables with Dotenv
- Gulp, Sass (lib sass), Babel (for ES6), Browserify, ESLint and BrowserSync

## Installation
### Automated installation
1. Run `npm install` and follow wizard once npm installs dependencies.
2. Set your site vhost document root to `/path/to/site/web/`
3. Put your theme and plugins into `/web/app/`.
4. If you want one command staging deployment, open `deploy.sh`, uncomment the last line, and change the URL to match your staging project.

### Manual installation
1. Clone the git repo - `git@bitbucket.org:signals/wordpress-seed.git`
2. Run `npm install`
3. Copy `.env.example` to `.env` and update environment variables:
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
  * This is no need to touch wp-config.php at all.

4. Open gulpfile.js and replace `YOURPROJECT` with the name of your project.
5. Set your site vhost document root to `/path/to/site/web/`
6. Put your theme and plugins into `/web/app/`.
7. Run `npm run getwp` to get the latest WordPress core, which now lives in `/web/wp`. You never need to touch this directory during development. It should ONLY contain the WordPress core files, and only needs to be completely replaced when upgrading WordPress.
8. Access WP admin at `http://example.com/wp/wp-admin`
9. If you want one command staging deployment, open `deploy.sh`, uncomment the last line, and change the URL to match your staging project.

## Development Usage
1. Run `gulp dev` from project root (not app folder or theme folder) to watch files and start working.

## Setting up staging and production servers
1. This project requires that you make `/web/` your public html folder on any server. On our DreamHost server, that means when you set your domain up, you need to make the "web directory" like this `/home/username/project.signalsinteractive.com/web`. Your git and root files live outside of the publicly accessible web root.
2. Setup up a .env file at your project root, one lower than the web root, just as you did when installing it locally. Make sure to specify `staging` or `production`.
3. There is no `prod` branch for Git. Master branch contains production code.

## Building and Deploying
There is a handy deploy.sh file that you can use by simply running `npm run deploy` (You'll need to uncomment and configure your SSH info in the file). If you want to manually build (for production), type `gulp build --production` and deploy however you wish.


# TODO

## Functional
Events
- lightbox for gallery opening
- different behaviour for navigation tiers - events?
- donate buttons specific to events? change header button?

## Responsive
- mobile subnav - accordion like

## Annual Report
- change animations
- add arrow down to all panels
- adjust font sizes
- CMS integration

About Us
- Learn about us menu.. where in CMS and what pages establish the pattern

- chinese content integration
- click pager to go to slide
- set thumbnail sizes and regenerate thumbnails
- browser testing
