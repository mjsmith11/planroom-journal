# Planroom Deployment Instructions
## Prerequisites
 - planroom-ui build **The api url must be set correctly in .env.production at build time**
 - planroom-api build
 - Apache server
 - MySQL Database
 - AWS S3 bucket and IAM user **[Configuration notes]**(https://github.com/mjsmith11/planroom-journal/blob/master/deployment/s3-settings.txt)
 - Google Cloud Platform key for Places API and Maps JavaScript API
 - PHP Mail function setup on server

## Before Deploying
 - Backup the files on the webserver in case a rollback is necessary

## planroom-ui Deployment
  1. Create a directory on the Apache server for the ui.
  1. Unzip the build.
  1. Open index.html in the dist directory of the build and replace <API_KEY_HERE> with your Google Cloud Platform key.
  1. Replace the contents of the ui directory on the Apache server with the contents of the build's dist directory.

## planroom-api Deployment
 1. Create a directory on the Apache server for the api.
 1. Unzip the build. 
 1. Create a config.json in the build's dist directory based on the [example_config.json](https://github.com/mjsmith11/planroom-api/blob/master/example_config.json).
     1. Add connection info for MySQL Database.
     1. CORS Origins should contain the url of the ui.
     1. display_error_details should be false
     1. Setup logging parameters as needed.
     1. Add AWS S3 connection info. The reccomended value of urlExpiration is 15.
     1. Add a JWT secret and contractorExp.  The reccomended value of contractorExp is 15.
     1. Add the base url. This is used for building the links to send in emails.
 1. Run phinx migrate to update database schemas.  **Note: Issues can happen when trying to run phinx in a production environment.  It may be required to temporarily connect a development environment to the production database or manually create tables (using exported queries from a development database) for this step.**
 1. Replace the contents of the api directory on the Apache server with the content's of the dist directory.
