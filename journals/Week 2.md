# Week 2 -- 08/27/18-09/02/18

## Continuous Integration Builds
Using Travis CI, I setup builds for both planroom-api and planroom-ui. Both builds start automatically on any push and run tests and build artifacts for deployment.  Additionally, the planroom-ui build runs linting. For tagged commits, artifacts are uploaded to the releases section under the Code tab of github. For the planroom-api build, the targeted php version (7.2) was not available, so the build runs on version 7.1 and the nightly php build (currently 7.4). Links to Travis CI are available on repository commits and README files.

I used the [official documentation](https://docs.travis-ci.com/) as a resource on Travis CI.

## Requirements Update
Two user stories were added this week. First, [Story S2.3](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#s23) on a project view for subcontractors was added as it was missed initially. Second, [Story C4.3](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c43) was added after clarifying with the customer that subcontractors should not be able to see which other subcontractors were invited to a project.

I also reorganized the user stories so that they are grouped by activities that users will perform.

## Domain Model
Based on the user stories, I created a domain model, located in the design directory, to represent the data in the system.

## Migration to Github
I am no longer using Trello and OneDrive to store information related to this project.  Instead, information will be consolidated to Github. The Kaanban board previously maintained on Trello now uses the the Issues and Projects features of Github on this repository. The user stories and nonfunctional requirments documents have been moved from OneDrive to the requirements directory of this repository.  The technology stack document has been retitled architecture and moved to the design directory of this repository.

## MySQL Connection
I started work on setting up a connection to MySQL from the PHP application. I decided that the secrets including the MySQL password will be stored in a file that is not commited to Github and not served by the web server.  This file will be parsed when needed and the values will be removed from memory after they are used. To ensure that this secrets file will not be served, .htaccess files are used.

To handle database schema creation and updates, I have chosen to use Phinx which is documented [here](https://book.cakephp.org/3.0/en/phinx.html).