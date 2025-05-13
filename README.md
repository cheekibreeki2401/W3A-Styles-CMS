# WELCOME TO U3A-STYLE
## What is U3A-Style?
U3A-Style is a wordpress theme designed specifically for the website for University of the Third Age as designated here: [http://13.239.234.32/home]. 
## I want to contribute to U3A-Style, how do I do it?
First, load WordPress on your local device (Either on bare metal or through a docker image) and locate the wp-content directory.
Then, you can get the theme files by cloning this guthub repository. To do so just type into your CLI once you have navigated to your wp-content directory:
> git clone https://github.com/cheekibreeki2401/W3A-Styles-CMS

Make sure that the repository that you downloaded replaces the themes folder that WordPress automatically sets up (Can be done by deleting the current theme folder and renaming the repository directory you just cloned). From there, you will be able to access the theme "U3A-Styles" and edit to your hearts content. twentytwentyfour is included since U3A-Styles is a child theme that inherits from that theme. You can edit the html, php, css or json files in your favourite text editor.  All you need to do once you are satisfied with the changes, you can push these changes to this repository again. To do so, use this command while in the themes directory:
> git push origin main

And these changes are then pushed to the main website and the github repository.

## How?
There are many ways to develop a child theme further:
* Make a new pattern that WordPress can use in its' site builder. A pattern is a group of blocks that can be filled with dummy data that can be dragged and dropped.
* Make a new page template. A page template is a series of blocks that can be used as a jumping off point for the rest of the site's pages. It can also be used so that the only focus of a page is what you require of a page (I.E. Headers and footers can be added to the template so that it no longer needs to be thought about AND when loading a new page, it will only display the main content bringing the focus of it as a designer to the important parts of a page).
* Make a part that can be referenced by patterns and templates. Simply enough, parts are html files that can be referenced elsewhere to build a page. Headers and footer is what this theme primarily uses.
* Edit the theme.json file which contains instructions for smaller aspects of the website including a colour palette, default values for certain HTML tags (Such as H1, p, a etc.) and custom font families. 

## The development process
This is the development process to change, update or otherwise modify this theme. Any violations of this process will result in a rollback of changes and banning from the repository.
1. Download latest changes to the theme (After setting up local repository and defining the remote repository as this one)  by using
> git pull origin main
2. Develop any changes to the theme as required.
3. Once satisfied with results on the local machine, push the changes to the remote repository
4. Check the production website ([http://13.239.234.32/home]) to see if your theme has successfully crossed over by loading a page and adding the part (**NOTE**: When editing the theme, blocks such as **patterns** will require a clear of the cache (Server and browser) or a hard refresh to display. If it does not display after those steps, the block you were working will need to be readded to the page to have the updated theme.)
5. Notify other developers of changes made.

## Theme development
This section will document any signifcant changes that the U3A-Styles theme has made over the twentytwentyfour parent theme:
* activity-preview-grid pattern that allows for three condensed paragraphs and pictures with links that can be modified.
* alternating-text-images is a 2x2 grid pattern that has text one one side and a picture on another, alternating back and forth. Can be added multiple times to increase length of the chain.
* activity-content is a pattern that creates a default page layout with a picture, a heading with text and dot points with date, time and locations.
* functions.php has been modified to include a custom post type called "activities" which is used as an archive of "activity" posts which can read posts with the activity-content pattern to display a preview and is used in another pattern to organise these activities in the archive in a productive and easy to read way in a responsive grid pattern.
* By default, the header will be sticky.
