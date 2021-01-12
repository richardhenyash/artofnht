# Art Of NHT - Testing #

## Contents ##
- [Automated Testing](#automated-testing)
    -[Custom CSS Styling](#custom-css-styling)
    -[HTML](#html)
- [User Stories Testing](#user-stories-testing)
- [Manual Testing](#manual-testing)
    - [Navigation Links](#navigation-links)
    - [Footer Link](#footer-link)
- [Bugs Fixed During Testing](#bugs-fixed-during-testing)
- [Bugs Not Fixed During Testing](#bugs-not-fixed-during-testing)

## Automated Testing ##

### Custom CSS Styling ###
[Custom CSS styling](./assets/css/style.css) was validated using the [W3C CSS validation service](https://jigsaw.w3.org/css-validator/). 2 errors were reported on a redundant class. The class was removed and the code was re-validated, and passed with no errors.

### HTML ###
All HTML code was validated using the [W3C Markup validation service](https://validator.w3.org/). One warning was generated on the [Home](./index.html) page. This is due to the fact that there is no heading in the main section, which is intentional as this would detract from the overall look and user experience. A number of errors were detected and fixed in the [Gallery](./gallery.html) page, including 2 closing h3 tags which were incorrectly set to p, and duplicate id's on the carousel control elements. The [Gallery](./gallery.html) page now passes validation without errors or warnings. The [About](./about.html) and [Contact](./contact.html) pages both passed validation without errors or warnings.

## User Stories Testing ##
* ***As a user I want to browse comic art sites for fun and inspiration.*** The user can easily browse through the artist's portfolio of work using the [Gallery](./gallery.html) page.
* ***As a user I am searching for existing comic art to buy.*** The user can easily browse through the artist's portfolio of work using the [Gallery](./gallery.html) page, and is able to contact the artist using the [Contact](./contact.html) form. The [Contact](./contact.html) form has been manually tested and works succesfully through [Formspree](https://help.formspree.io/hc/en-us).
* ***As a user I am searching for an artist to commission some work.*** The user can easily browse through the artist's portfolio of work using the [Gallery](./gallery.html) page, and is able to contact the artist using the [Contact](./contact.html) form. The [Contact](./contact.html) form has been manually tested and works succesfully through [Formspree](https://help.formspree.io/hc/en-us).
* ***As a user I want to contact the artist.*** The user is able to contact the artist using the [Contact](./contact.html) form. The [Contact](./contact.html) form has been manually tested and works succesfully through [Formspree](https://help.formspree.io/hc/en-us).
* ***As a user I want to find out more about a specific piece of art.*** When the user clicks on a specific picture in the [Gallery](./gallery.html) or on the [Home](./home.html) page they are presented with a modal pop up which includes a larger version of the picture, the picture name and medium. 

## Manual Testing ##
### Navigation Links
Navigation links and Navigation Links hover styling have been tested on all pages and works correctly.

### Logo Link
Logo link and Logo Link hover styling has been tested on all pages and works correctly (links to [Home](./index.html) page).

### Footer Link
Footer link and Footer Link hover styling have been tested on all pages and works correctly.

### Home Page Image Modals
[Home](./index.html) page pop-up image modals have been tested and work correctly.

### Gallery Page Image Modals
[Gallery](./gallery.html) page pop-up image modals have been tested and work correctly.

## Bugs Fixed During Testing ##

## Bugs Not Fixed During Testing ##