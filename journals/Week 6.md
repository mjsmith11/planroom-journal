# Week 6 -- 09/24/18-09/30/18

## Job Display Testing
This week I created tests for the code added for listing and showing jobs in [Issue #14](https://github.com/mjsmith11/planroom-journal/issues/14).

## Date and Time Refactoring
During the development for [Issue #14](https://github.com/mjsmith11/planroom-journal/issues/14), warnings appeared in the builds for planroom-ui due to the filesize of the entrypoint assets produced by the build. Upon investigation, I found that the moment and moment-timezone javascript libraries made up a significant portion of the size by using a [vue-cli plugin](https://www.npmjs.com/package/vue-cli-plugin-webpack-bundle-analyzer). I analyzed the usage of these libraries and decided to rewrite the same functionality with plain javascript using https://www.mresoftware.com/simpleDST.htm as a resource.  Moment is still used in tests and listed as a development dependency.  After the change, the asset size still exceeded the maximum threshold of 250 kB, so I set a custom threshold of 400 kB. I'm planning to look into implementing lazy loading in the vue router to further address this issue.

## Releases
### planroom-api v0.2.0
 - Logging
 - REST Endpoint to read a single job
 - REST Endpoint to read all jobs with sorting

### planroom-ui 0.2.0
 - Job List View
 - Job Detail View
 - Fixed Add Job form labels and field order

## Github Milestone Setup
To add some detail on prioritization of features, I added two milestones to the github project. The first milestone contains github issues necessary for a deployable minimum viable product.  The second contains github issues needed for a first iteration of providing subcontractors access to a job.