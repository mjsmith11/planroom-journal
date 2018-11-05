# Week 11 -- 10/29/18-11/04/18

## Subcontractor View
This week, I completed code and tests for [Issue 24](https://github.com/mjsmith11/planroom-journal/issues/24) which required the creation a view for subcontractor users. This reuses portions of the existing show job view. I worked with the customer on November 3 for the design of this view.

## Subcontractor Authentication
This week I worked on code for [Issue 17](https://github.com/mjsmith11/planroom-journal/issues/17). This issue adds the ability for a subcontractor to authenticate using a token that they will receive via email.  As a part of this, I'm investigating webpack's code splitting feature so that browsers will not download code for features the user doesn't have access to.  Details on the tokens and permissions are located in the authorization document in the design directory.