# Week 13 -- 11/12/18-11/18/18

## First Use By Client
This week marks the first time that the customer used the system. On November 13, the customer created a job and on November 14, the first invitations were sent.
### Feedback
I have received initial feedback from the customer since they started using the system:
 - In the future, we will redisign the subcontractor view including incorporating a photo provided by the customer, increasing the space for the bid email address so it does not wrap, and making the bid email a mailto link.
 - Sometimes plans will be PDF portfolios. It has been noted that when many browsers, including chrome, load these files with their internal pdf viewer, a message is displayed that the PDF portfolio must be opened with Acrobat X or Adobe Reader X. This is due to the fact that Flash is required to display these files in the browser.  I'm unaware of a way to avoid the message at this time.

 We asked the individuals who received invitations for feedback, but I have not received that feedback yet.

### Bug Fixes 
Three bugs were noted during the initial use of the system:
 - Times in the noon hour were displayed as AM, and times in the midnight hour were displayed with hour 0 instead of 12. This has been fixed.
 - File uploads with '#' in the filename were being uploaded with truncated names. This was due to lack of encoding of the filename in the request.  This has been fixed.
 - Clicking on the download links exhibits inconsistent behavior including downloading the file, opening the file in the same tab, and opening the file in a new tab.  This behavior can be standardized using metadata in AWS S3. [Issue 35](https://github.com/mjsmith11/planroom-journal/issues/35) has been opened to automatically set this metadata.

Currently deployed versions are planroom-ui 1.1.2 and planroom-api 1.1.1.


### Cleaning up data
Due to the noted bugs, I needed to clean up some of the data on AWS. This included renaming files in S3 so that they have the .pdf extension and manually adding S3 metadata.


## API Documentation with Swagger
This week, I completed [Issue 9](https://github.com/mjsmith11/planroom-journal/issues/9) to create documentation for the API.  Directions for generating and viewing this documentation is in the README in the planroom-api repository.  The documentation is currently only in the develop branch.

## Getting Started Files
For the planroom-ui and planroom-api repositories, I created getting started files detailing the contents of the repository.

## Favicon
I completed [Issue 26](https://github.com/mjsmith11/planroom-journal/issues/26) to change the favicon file to a branded icon instead of the Vue logo.