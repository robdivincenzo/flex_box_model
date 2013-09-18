To whom it may concern:

Overview: The files in this folder are example pieces of a flex box model implementation.

Goal: The goal of this implementation was to create a portfolio site for my friend and I, who are looking to host our work. Other goals included making the website support a flex box model design for mobile/HTML5 devices and browsers. Supporting this will allow a clean, smooth, automatically resizing website.

Technologies: The implementation is written in PHP in a CodeIgniter2 MVC framework. Other technologies used in this implementation are HTML5, CSS3 (boxkit/webkit), CodeIgniter Active Record (generalized SQL), and WordPress (blog post feed).

View the Work: The wireframe file contains what the site would look like. You can resize the window (to sizes for mobile/tablet devices) to get an idea of how the boxes resize based upon browser window. The flex box model is supported in Chrome, Firefox, and Safari.

Other Notes: I have modified the base controller of the CodeIgniter2 MVC framework to include a function and variable to automatically set the site_type to mobile/HTML5 or main (for non-supported browsers). This variable is included to determine which view or CSS file is loaded. This is a smooth solution as those types of files depend on the site_type, where other files (controllers, models, etc.) do not. This way, I do not have to have two completely separate sites.

-Rob DiVincenzo
rob.divincenzo@gmail.com