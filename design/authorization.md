# Authorization

## JWT Payload
The payload of the tokens will contain the following fields used for authorization:
 - exp   : The unix timestamp when the token expires
 - email : The email address of the user
 - role  : The user's role ('contractor' or 'subcontractor')
 - job   : The job the user can access.  This will contain * for contractors as they can access all jobs.  It will identify a single job for subcontractors.

## Backend Route Permissions
### Contractor Users
 - All routes
### Subcontractor Users
 - GET /jobs/:id
 - GET /jobs/:id/plans
Note: Each subcontractor user only has permission for the id specified in his or her token.

## Frontend Route Permissions
### Contractor Users
 - All routes
### Subcontractor Users
 - /jobs/:id
Note: Each subcontractor user only has permission for the id specified in his or her token.