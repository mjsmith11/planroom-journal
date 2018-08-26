#Week 1 -- 08/20/18-08/26/18

## Documenting Requirements
Using notes from discussions with the customer, I created initial versions of a user stories document and a nonfunctional requirements document.  These documents are in this week's files.

## Selecting Technology Stack
Based on the needs of the customer, I selected technologies to use for the project.  These choices were largely dictated by the customer's existing web hosting from 1and1 internet. During this process, I created and a simple test backend with a single API endpoint and a frontend which consumes the endpoint.  These sample applications were successfully deployed and tested using the cutomer's web hosting environment. The selected technologies are listed in this week's files.

One concern in the technology stack is the MySQL version.  At this time, 1and1 is only offering MySQL 5.5 which will reach its end of support in December 2018.  This means that a database version upgrade should be expected during development.  The features of MySQL 5.5 are sufficient, but the JSON feature added in version 5.7 could be useful in this project.

## Preparing Repositories
The github repositories for this project are created and contain empty projects with the selected frameworks installed. Note that these repositories are using Gitflow, so the most recent code may be in the develop branch or feature branches. Merges to master are only done for releases.
*  [planroom-ui](https://github.com/mjsmith11/planroom-ui)
*  [planroom-api](https://github.com/mjsmith11/planroom-api)

## Files
[Click Here](https://1drv.ms/f/s!AmarH2bB5tywgutugLHtz5IsZhk_Cg)