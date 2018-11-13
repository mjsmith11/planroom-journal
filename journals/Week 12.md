# Week 12 -- 11/05/18-11/11/18

## Token Based Subcontractor Authentication
This week I finished all code and testing for [Issue 17](https://github.com/mjsmith11/planroom-journal/issues/17) to authenticate subcontractors with a token that they will recieve via email. While implementing this task, I also updated planroom-ui to use webpack's code splitting and lazy loading.

## Emailing Invitations
I completed code and testing for [Issue 16](https://github.com/mjsmith11/planroom-journal/issues/16) to send invitations to subcontractors via email.  I have concerns about the time that the backend takes to respond to an api call to send emails and the emails getting stuck in spam filters. I opened [Issue 34](https://github.com/mjsmith11/planroom-journal/issues/34) to investigate alternative approaches to emailing that may be faster. I do not have an issue for addressing the spam filter problem at this time.

## Releases and Deployments
On 11/11/18, I released and deployed planroom-api 1.1.0 and planroom-ui 1.1.0.  These releases contained the features completed during weeks 11 and 12 including the subcontractor view, token based subcontractor authentication, and emailing invitations.  I did have to immediately release and deploy planroom-api 1.1.1 because the web server timed out trying to connect to the SMTP server to send emails although the connection succeeded in development environments.  The change replaces the SMTP connection with PHP's mail function. The deployment is at planroom.benchmarkmechanical.com.
