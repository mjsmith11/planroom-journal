# Week 9 -- 10/15/18-10/21/18

## Password Authentication
This week I finished coding for password authentication on the front end and back end.

### Backend
The backend has two new routes, '/login' and '/token-refresh'. On success, both return a token for the user valid for a time period determined by the config file. The '/login' route requires a valid email address and password to be sent with the request.  The '/token-refresh' route requires a valid token to be included with the request.  Also, middleware was added to require valid tokens for requests to all endpoints except '/login'.

When reading online sources, I found that tokens are often distributed in pairs: an access token and a refresh token. I considered using the two token approach for this project and decided against it. This approach is used in an architecture which includes an authorization server responsible only for issuing tokens and one or more resource servers. The access tokens are used to authenticate with resource servers and considered a smaller security risk if lost because they are typically short lived. Refresh tokens can have longer lives and are intended to be stored more securely by the client. They are only ever exchanged with the authorization server to obtain fresh tokens.  Since the system architecture does not include an authorization server and resource servers, I opted to not use the two token approach.

### Frontend
I used [vue-auth-vue](https://github.com/christiannwamba/vue-auth-vue) as a guide for integrating the frontend to the backend's new authentication system.

The frontend now uses Vuex to manage the state.  It keeps track of which user is logged in and the access token.  It also keeps the token refreshed automatically and adds the token as a common header in axios. Tokens do not get stored in local storage or cookies at this time.

A new form was added to allow the user to login.

The router has been updated to designate some routes as secure and checks that a user is logged in before loading those routes.

## Navigation Bar
I added a navigation bar in anticipation of releasing to the customer for the first time. In development, I navigated the website by typing urls, but the end user will need to click buttons.

## Vagrant updates
There was an issue with bringing up the vagrant environment on windows hosts.  I fixed this issue, but the vagrant environment now requires a text editor with an SSH plugin. I tested this with a plugin for Visual Studio Code. Details are in the environment's README.
