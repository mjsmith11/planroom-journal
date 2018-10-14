# Week 8 -- 10/08/18-10/14/18

## Testing S3 Integration
This week I wrote tests for the integration to Amazon S3. There was an issue with mounting components during testing. It was related to importing the bootstrap css. The solution was to add identity-obj-proxy as a dev dependency as shown [here](https://stackoverflow.com/questions/48917106/jest-css-modules-syntaxerror-unexpected-token).

## Contractor Authentication
I started working on email/password authentication for contractor users. I added the [slim-jwt-auth](https://github.com/tuupola/slim-jwt-auth) middleware to the backend. This middleware performs JWT (JSON Web Token) validation to authenticate incoming requests. I also created a user table in the database and a corresponding orchestrator class. This is groundwork for for a login endpoint that will accept email and password. It will return a JWT on a successful login. This table will be added to the EER diagram when it is used by an endpoint.

## Releases
### planroom-api 0.3.0
 - Endpoint to request a presigned post to AWS S3.
 - Endpoint to get a list of plans for a job and signed download url
### planroom-ui 0.3.0
 - Uploading Files to a Job
 - Downloading Files from a Job

## Customer Meeting Notes (10/14/18)
 - Demo of planroom-api 0.3.0 and planroom-ui 0.3.0
 - When a file already exists with the same name as a file being uploaded, the user should be prompted for confirmation.
   - [User Story C2.3](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c23)
   - [Issue 32](https://github.com/mjsmith11/planroom-journal/issues/32)
 - Cross-region replication is not needed in AWS S3.
 - Versioning is not needed on the files. Only the most recent version should be kept.
 - The contractor should be able to delete a document from a job.
    - [User Story C9.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c91)
    - [Issue 33](https://github.com/mjsmith11/planroom-journal/issues/33)
 - The term 'Bidding Documents' should be used instead of 'Plans' on the show job page.
    - [Issue 13](https://github.com/mjsmith11/planroom-journal/issues/13)
 - The customer should be shown when their invitation to a job expires.
     - [User Story S23](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#s23)
     - [Issue 24](https://github.com/mjsmith11/planroom-journal/issues/24)
 - The contractor should be able to reinvite a subcontractor if their invitation expires before they access the job.
     - [User Story C4.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c41)
     - [Issue 16](https://github.com/mjsmith11/planroom-journal/issues/16)
 - The 'bid email' field should be replaced by 'estimator' which is a record from the user table.
     - [User Story C2.1](https://github.com/mjsmith11/planroom-journal/blob/master/requirements/user_stories.md#c21)
     - [Issue 31](https://github.com/mjsmith11/planroom-journal/issues/31)
