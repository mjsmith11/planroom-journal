# Week 7 -- 10/01/18-10/07/18

## Vagrant Environment
The new environment directory of this repository contains a vagrant script that creates a development environment for the project in a virtual machine. Vagrant makes development environments easy to setup and consistent between developers. Directions for using the script are in the README file in the environment directory.

## Hotfix to planroom-api
This week I made a hotfix to planroom-api and tagged version 0.2.2. The hotfix contained the following:
 - Updates to fix broken Phinx database migrations.
 - Update to composer.json so the api can run a development server in a vagrant environment.

## S3 Integration
The integration to AWS S3 for plan files is complete, but untested. From the view that shows a single job, the user can upload files from his or her computer directly to S3 using a presigned post as documented [here](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-presigned-post.html). The user is also shown a list of plan files already uploaded to the job. He or she may click any of these files to download it.  The download is directly from S3 to the user's computer using presigned requests. ([documentation](https://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.S3.S3Client.html#_createPresignedRequest)).

## v1 Update
I had a goal of releasing version 1.0 which would represent a minimum viable product that the customer could start using by the end of Week 8. At this point, I am not on pace to meet that goal. Version 1.0 requires user authentication which I'm planning to work on after I finish testing the S3 Integration. I anticipate finishing this testing mid to late Week 8. I'll likely have 0.3.0 prereleases containing the S3 integration at the end of Week 8 to stay on the 2 week release cycle.