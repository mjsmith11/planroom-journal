# Week 5 -- 09/17/18-09/23/18

## Week 4 Journal Update
I updated my week 4 journal to include a user story reference for the release that occured in week 4.

## UI Adjustments 
This week I made some UI adjustments and tested them.  The changes included reordering fields on a form and changing labels. This work was based on customer feedback and closes [Issue #30](https://github.com/mjsmith11/planroom-journal/issues/30).

## Backend Logging
This week I completed [Issue #8](https://github.com/mjsmith11/planroom-journal/issues/8) to add logging to the backend. The backend logging uses the [Monolog library](https://github.com/Seldaek/monolog) which is documented in its repository. The eight log levels described by [RFC 5424](https://tools.ietf.org/html/rfc5424) are supported.

## Project Display
I started working on [Issue #14](https://github.com/mjsmith11/planroom-journal/issues/14) to display projects that are in the system. It includes a listing of all projects and a detail view for a single project. This week I completed the code for this feature. Next week, I will work on the refactoring and testing this feature. 

## Customer Demo
I showed the customer the new project display feature and obtained the following feedback:
 - Add a boolean field to the job table that is set to true when central time should be displayed.
 - The bidDate field is redundant.  The date portion of the subcontractorBidsDue field should be used instead.  Also the subcontractorBidsDue field on the add job form should be moved to the current location of the bidDate field.

 I updated userstories [C2.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c21) and [C3.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c31) as well as the [nonfunctional requirements](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/nonfunctional.md) to reflect these changes. These changes will be added to [Issue #31](https://github.com/mjsmith11/planroom-journal/issues/31).