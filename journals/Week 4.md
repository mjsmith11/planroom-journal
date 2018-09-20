# Week 4 -- 09/10/18-09/16/18

## Unit Testing
This week I familiarized myself with the unit testing frameworks used in this project (phpunit and Jest) and wrote unit tests for the code developed in Week 3. For phpunit, the official php and phpunit documentation was most helpful.  Resources for working with Jest are listed below:
 - https://alexjoverm.github.io/2017/08/28/Test-Deeply-Rendered-Vue-js-Components-in-Jest/ 
 - https://stackoverflow.com/questions/51127176/unexpected-token-import-error-while-running-jest-tests 
 - https://github.com/monterail/vuelidate/issues/146 
 - https://vue-test-utils.vuejs.org/

## Backend Build Updates
 - The build for planroom-api now runs syntax checking and linting (using php checkstyle).
 - The build for planroom-api now runs on php 7.2 in addition to 7.1 and the nightly build (currently 7.4).

## Backlog Prioritization
The Backlog column of the kaanban board is now grouped by tag (enhancement, technical, etc.). Priority is indicated by order within each tag with higher priority tasks appearing at the top.

## Customer Meeting
Notes from a meeting with the customer on 09/16/18
### Demo
I gave a demo of the add job functionality and got the following notes which will be addressed by [Issue #30](https://github.com/mjsmith11/planroom-journal/issues/30):
 - The heading 'Subcontractor Bid Deadline' should be changed to 'Subcontractor Bids Due to Benchmark'
 - The 'Subcontractor Bids Due to Benchmark' field should be moved under the 'Prebid Address' field.
### Timezone Discussion
We discussed how the application should handle time zones.  It should always expect and display Eastern Standard Time.  To make notes regarding timezones or other topics, the customer would like a special note field added to jobs. This is reflected in an update to [User Story C2.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c31) and the [nonfunctional requirements](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/nonfunctional.md). These changes will be made with issues [30](https://github.com/mjsmith11/planroom-journal/issues/30) and [31](https://github.com/mjsmith11/planroom-journal/issues/31).

### Nonfunctional Requirement Refinement
We discussed the nonfunctional requirement 'The website should be a nice-looking web site so that it stands out from other competing solutions.' to add some more measureable points to it. These points have been added to the nonfunctional requirements [document](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/nonfunctional.md).

## Releases
 [planroom-ui 0.1.0](https://github.com/mjsmith11/planroom-ui/releases/tag/0.1.0) and [planroom-api 0.1.1](https://github.com/mjsmith11/planroom-api/releases/tag/0.1.1) were released this week. These releases contain the add a job feature ([Story C2.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c21)) from Week 3. planroom-api is not version 0.1.0 as expected due to a build issue found after tagging 0.1.0.  The issue was fixed using a hotfix branch as prescribed by Gitflow.

