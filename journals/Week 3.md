# Week 3 -- 09/03/18-09/09/18

## Domain Model Update
I updated the relationships in the domain model to remove UML aggregation notation because it is atypical to see this notation in a domain model.  Domain models without this notation are shown [here](http://stg-tud.github.io/eise/WS11-EiSE-07-Domain_Modeling.pdf) and [here](https://www.rose-hulman.edu/class/cs/csse374-201020-02/SlidePDFs/session05.pdf)

## Database setup
I completed the necessary setup for the backend to connect to a MySQL database.  One difficulty was connecting to a database on the same host as the backend.  The solution, found [here](https://stackoverflow.com/questions/4219970/warning-mysql-connect-2002-no-such-file-or-directory-trying-to-connect-vi/20184151), was to use `127.0.0.1` rather than `localhost`. Once connected, I was able to run my first phinx migration which created a table in the database. An EER Diagram is located in the design directory of this repository. To interact with the database I created a abstract base orchestrator class which will provide basic CRUD functionality to it's child classes which will correspond to database tables.

## Job Creation
I created a form in Vue at the route /jobs/new for adding a new job to the system.  The form validates the input using the Vuelidate library. Data is saved by calling an api endpoint which was added to the backend. This feature still needs test cases added to the test suites.

## CORS
There was an issue that occured when manually testing the form which caused saving to fail.  Based on the browser console output and [this article](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS), I determined that the backend needed to include CORS headers when it responds to requests. The [Slim Documentation](https://www.slimframework.com/docs/v3/cookbook/enable-cors.html) explains how CORS headers should be added. My implementation allows a list of origins to allow in the config file so that multiple front ends can be supported. The origin of the request is returned in the allowed origins header if and only if it is in the config file list. The allowed headers, methods, and max age are always the same.