# Week 14 -- 11/19/18-11/25/18

## Phinx Troubleshooting
This week I did troubleshooting on why phinx didn't work for database migrations in production so that schema changes don't need to be applied manually. The issue was that the production environment has multiple php versions installed and the default version was not compatible with phinx. There were also issues with the paths in the import statements within phinx. After solving the issue I created records in the phinxlog table so that phinx will not attempt the migrations that I already ran manually.  In the process, I learned that phinx has a `--dry-run` flag that will cause it to show the queries it would have run if it was actually performing the migration.

## Colloquium Presentation
This week I prepared the first draft of my presentation for the colloquium during Week 16.