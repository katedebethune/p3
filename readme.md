csci e15 project 3 <br />
The Developer's Best Friend<br />
Kate de Bethune <br />
October 23, 2014<br />

# live URL for project
http://p3.kdeb-csci-e15.me

# Description of project
Project demonstrates an understanding of the following: <br />
* Creating a new Laravel app <br />
* Installing & using Composer packages <br />
* Routing & Views <br />
* Deploying a Laravel app on a live server <br />

Required features: <br />
* A Lorem Ipsum Generator & a Random User Generator <br />
* A landing page with links to the two tools, or with the tools present on the page. <br />

Extra functionality included: <br />
This implementation of the Developer's Best Friend includes the following additional features: <br />

* Random Users provides options for birthdate and a profile. If all options are selected, it also generates an array presentation of the data for inclusion in script to seed a database. This is a prototype at this stage. <br />

* xkcd generator has been incorporated as the PasswordGen class. <br />

* Color Extractor: an additional feature is included, allowing the end user to upload a png and derive a palette of hex colors (up to five). <br />

* Validation: validation has been incorporated in routes.php for text fields and in the case of the Color Extractor, for the type of file being uploaded (i.e. file must end in '.png'. All other fields are selects of 'yes' and 'no', and so have not been included for validation.

# Demo information
A brief description of how to use each feature is contained <br />
within the content of the index page. <br />
<br />
Site will be demonstrated in section on Oct 29. <br />

# Details for instructor / TA <br />

#Outside packages and credits

1. Wordlist for xkcd password generator is courtesy of <br />
https://www.englishclub.com/vocabulary/common-words-5000.htm <br />
It was converted from html to txt using sed commands. <br />
2. html reset code is courtesy of <br />
   http://meyerweb.com/eric/tools/css/reset/ <br />
   v2.0 | 20110126 <br />
   License: none (public domain) <br />
3. CSS framework courtesy of bootstrap: <br />
	http://getbootstrap.com <br />
4. Fake users package courtesy of fzaninotto/faker <br />
https://packagist.org/packages/fzaninotto/faker <br />
5. Lorem Ipsum package courtesy of badcow/LoremIpsum <br />
https://packagist.org/packages/badcow/lorem-ipsum <br />
6. Color Extractor package courtesy of league/color-extractor
https://packagist.org/packages/league/color-extractor
7. The inspiration for XKCD-style passwords courtesy of xkcd.com <br />
  

