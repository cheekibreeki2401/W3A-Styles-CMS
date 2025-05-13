# Final Report
## Decription of project
This project is to create a website for the U3A (University of 3rd Age) organisation which focuses on creating activities for elderly people to keep their minds (and bodies) active. The website primarily focuses on advertising the services of U3A to the Townsville area (Including information for it) and allow the participants of the activity to discuss amongst themselves in a forum environment, with an FAQ to also dispense information.
## Basic workflow
1. Load up docker image (Explained further in Local environment section of report) containing the WordPress site contents
2. Open the WordPress admin page and open a page (or create a page) that a new theme change will be used in
3. Using a local editor (In my case VIM), change any relevant files that are required for the latest change in theme (style.css, theme.json, html files in parts, php files in patterns or templates are usually the files that require editing).
4. Review changes in local environment version of WordPress, repeat stage 3 until satisfied.
5. Commit changes to git and then push to github repository.
6. Review online version of site to confirm changes have been pushed to live site and edit pages as required.
## Local Environment
The local environment used is a Docker image on my Arch Linux laptop that contains all of the neccersary files to edit and create websites in WordPress synced to a local SSD stored directory that I can edit freely via VIM, which is also my local git repository.
## Technologies used
Github, VIM, WordPress, AWS LightSail  and Docker are all used to create this project.
## Deeper Workflow Details
The CI/CD approach to this website and the theme comes from a feature on github called "actions" which allows for the creation of .yml files that can do basic actions upon a desired trigger. My trigger for this theme is on push to the main repository, which will then cause a workflow that allows an SSH log in to my AWS console using a secret SSH Key. Once in the console, it will navigate to the desired folder (In this case the /opt/bitnami/wordpress/wp-content/themes directory) and run a git pull command to pull the desired repository, resolve the differences then change ownership of the files to the bitnami user (And associated daemons). The SSH session will then close. A further extension of this is to have a "main" repository that I can commit and push updates to without hassle and then having a seperate "production-deploy" branch of the repository that I can merge differences into when I am ready to push it to the production environment. The workflow when it comes to working on the website itself is to primarily use the production environment while the local environment is to test out new theme components in an isolated environment and not affect the main website.
## Career outcomes
This assignment isn't wholly relevant to my career prospects, however, it has allowed me to gain a deeper understanding on the management of content in the modern world wide web with themes that allow for easier creations of pages and entire websites with a drag and drop functionality. It also allowed me to think more critically of my choices when it comes to front end development whenever I require to present a user facing program.
