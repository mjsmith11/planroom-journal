# Week 10 -- 10/22/18-10/28/18

## Login Testing
This week I created tests for the Password Based Authentication and Navbar created last week. During testing, I referenced the vue router section of the [vue-test-utils documentation](https://vue-test-utils.vuejs.org/guides/using-with-vue-router.html) and the vuex section of [vue-testing-handbook](https://lmiller1990.github.io/vue-testing-handbook/testing-vuex.html#testing-vuex).

## Releases
This week I released planroom-ui 1.0.0 and planroom-api 1.0.0.  Password-based authentication and the navbar are the new features for these releases. This authentication required a user table in the database, thus the EER diagram in the design section of this repository has been updated.

## Deployment
I setup a TLS/SSL Certificate on the web server closing [Issue 28](https://github.com/mjsmith11/planroom-journal/issues/28). I proceeded to attempt to deploy planroom-ui 1.0.0 and planroom-api 1.0.0. The url of the production environment is https://planroom.benchmarkmechanical.com.

## Hotfixes
In the process of deployment, issues were discovered that were fixed via a series of hotfixes. The versions actually deployed at https://planroom.benchmarkmechanical.com are planroom-ui 1.0.4 and planroom-api 1.0.3. The changes included in the hotfixes are as follows:
 - Sending API calls from the ui via https instead of http.
 - Modify .htaccess files to instruct the server to redirect http requests to https.
 - Change header name for the auth token to Planroom-Authorization from Authorization because the Authorization header is getting stripped off of requests.
 - Add the Planroom-Authorization to the dropzone configuration used for file uploads.
 - Changes to build to include all required files (An .htaccess file was missing in the planroom-api build).
It could be argued that the change of the Authorization header name breaks the api and 2.0 versions should be used. I decided not to do this based on the argument that the public api had not yet been declared because a successful deployment had not happened.

## Vagrant Update
I updated the vagrant environment to include the latest additions to the planroom-api config file and to seed the database with a user.

## Customer Meeting (10/28/18)
I had a very short meeting with the customer to show them the application running on their domain and setup their user accounts. 

## Git Access to Web Server
[Issue 12](https://github.com/mjsmith11/planroom-journal/issues/12) has been closed. Upon further investigation, the deployment space can act as a git client, but not a git server.  This issue needed it to act as a git server.