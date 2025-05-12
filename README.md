# WELCOME TO U3A-STYLE
## What is U3A-Style?
U3A-Style is a wordpress theme designed specifically for the website for University of the Third Age as designated here: [To insert URL of U3A Website here]. 
## I want to contribute to U3A-Style, how do I do it?
You can contribute to U3A-Style by first cloning this guthub repository. To do so just type in:
> git clone [insert Github URL here]

Then, set up a local WordPress environment. It is recommended to do it through a docker container/image. There are many handy instructions on how to do this on the web. Once your Docker image is set up, you can use the cloned repository to insert content directly into your image and work on it via graphical methods or your CLI. All you need to do once you are satisfied with the changes, you can push these changes to this repository again. To do so, set up the github repository as the remote respository of these files using:
> git remote add origin [https://github.com/cheekibreeki2401/W3A-Styles-CMS]

And to push these changes use:
> git push origin main

And these changes are then pushed to the main website.

## How?
TODO: FILL THIS SECTION IN

## The development process
This is the development process to change, update or otherwise modify this theme. Any violations of this process will result in a rollback of changes and banning from the repository.
1. Download latest changes to the theme (After setting up local repository and defining the remote repository as this one)  by using
> git pull origin main
2. Develop any changes to the theme as required.
3. Once satisfied with results on the local machine, push the changes to the remote repository
4. Check the production website ([Insert URL of U3A website here]) to see if your theme has successfully crossed over.
5. Notify other developers of changes made.

## Theme development
This is a change log of what has been added to the site theme. Please use this part of the README as a list of the details of the theme.
- 12\05\2025: Updated theme header and footer to suit the website better. Also added in a new pattern for three pictures with descriptions and links called "Activity Preview Grid".

