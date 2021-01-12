# Art Of NHT #

## Contents ##
- [Background](#background)
- [Business Goals](#business-goals)
- [Project Goals](#project-goals)
- [User Goals](#user-goals)
- [UX](#ux)
    - [Project Strategy](#project-strategy)
        - [Opportunities Matrix](#opportunities-matrix)
        - [Initial Development Phase](#initial-development-phase)
    - [Project Scope](#project-scope)
        - [User Demographics](#user-demographics)
        - [User Requirements](#user-requirements)
        - [User Stories](#user-stories)
        - [Contraints](#constraints)
        - [Functional Requirements](#functional-requirements)
        - [Business Rules](#business-rules)
        - [Features](#features)
    - [Site Map](#site-map)
    - [Wireframes](#wireframes)
    - [Design Choices](#design-choices)
        - [Fonts](#fonts)
        - [Colours](#colours)
- [Technologies](#technologies)
    - [Languages](#languages)
    - [Frameworks Libraries and Tools](#frameworks-libraries-and-tools)
- [Features](#features)
    - [Features Implemented in Phase 1](#features-implemented-in-phase-1)
    - [Features To Be Implemented In Future Development Phases](#features-to-be-implemented-in-future-development-phases)
    - [Design Changes During The Phase 1 Development](#design-changes-during-the-phase-1-development)
- [Testing](#testing)
- [Deployment](#deployment)
- [Credits](#credits)
- [Acknowledgements](#acknowledgements)

## Background ##
Nick Hope Thompson is a talented comic artist who has been drawing for fun and professionally for many years. He does not currently have an online presence. He has sold pieces of his comic art, has previously been commisioned to produce pieces and would like to increase his opportunities to work professionally producing comic art.

## Business Goals ##
To increase sales of Nick's art.

## Project Goals ##
To showcase the artist's portfolio, increase the artist's profile within the comic art community and to provide a means for prospective clients to engage.

## User Goals ##
To browse comic art for fun and inspiration and potentially to buy. To commission an artist to create some personalised art work.

## UX ##

### Project Strategy ###
To define the overall project strategy, an initial project strategy meeting was held with the client.

#### Opportunities Matrix ####
The following opportunities were identified and ranked using a score of 1 - 5 for importance and viability:

Opportunity | Importance |Viability
------------| -----------|---------
Create online presence|5|5
Showcase portfolio|5|4
Provide contact information|5|5
Biography|4|5
Link to artist page on comicartfans.com|3|3
Subscribe|2|1
Communicate pricing information|2|5
Increase social media followers|2|3
Create a blog|5|5
Develop online sales capability|1|1

<img src="./assets/wireframes/initialstrategy.png" style="margin: 15px;">

#### Initial Development Phase ####
The opportunities matrix was used to help decide which items should be included for the initial development phase (phase 1):
Item|Development Phase
----|-----------------
Create an online presence|1
Showcase portfolio of work to potential customers|1
Provide contact information to potential customers|1
Biography|1
Provide link to artist page on comicartfans.com|1
Subscribe|2
Increase social media followers|2
Create a blog|2
Develop online sales capability|3

### Project Scope ###
#### User Demographics ####
* The primary users of the site will be comic art fans. The demographics of comic art fans are quite wide - male and female from ages 5 up to 60 who have an appreciation for comic art.
* A simple, colorful and attractive design would fit this demographic. As the demographic is particularly interested in art and design, the site needs to reflect this and a vibrant and modern design is of high importance.

#### User Requirements ####
* Visually engaging
* Easy to navigate
* The key information should be layed out in a simple, easy to follow and clear way.
* Responsive design is required as users may be viewing the site on Mobile, Tablet or Desktop.

#### User Stories ####
* As a user I want to browse comic art sites for fun and inspiration.
* As a user I am searching for existing comic art to buy.
* As a user I am searching for an artist to commission some work.
* As a user I want to contact the artist.

#### Constraints #####
* Developer skill set - the developer is currently unable to develop an online sales capability, but this may be considered for future development phases.
* The client is reluctant to create a social media presence on facebook, instagram etc, but does have an artist page on https://www.comicartfans.com/ which should be linked to.
* The client has time constaints on the amount of work he can produce as he has a full time job. We discussed incorporating a Subscribe or Sign Up option, which would allow the artist to produce art and then contact a mailing list of prospective buyers. We decided not to include this feature in phase 1 due to the complications of storing email marketing lists within the constraints of the GDPR regulations.
* The website functional features and background should not be to 'loud' or detract from the main focus of the website, which is presenting the artist's colourful and attractive work.

#### Functional Requirements ####
* The user would like to view a portfolio of the artist's work.
* The user requires contact information to enable them to contact the artist.
* The user potentially requires pricing information. It was decided during the initial stategy meeting with the client that pricing information would not be disclosed on the website, but would be provided on request.

#### Business rules ####
* Copyright notices - all comic book characters are copyright of their respective owners. The copyright notice should appear on each page in the footer.

#### Features ####
The following key features have been identified and scored from 1 - 5 for importance and difficulty. The proposed development phase has also been indicated:
Feature|Importance|Difficulty|Development Phase
-------|----------|----------|-----------------
Navigation menu | 5 | 2 | 1
Portfolio images | 5 | 3 | 1
Contact form | 5 | 1 | 1
Biography | 4 | 2 | 1
Copyright notices | 5 | 1 | 1
Link to comicartfans.com | 3 | 1 | 1
Links to social media | 2 | 1 | 2
Subscribe feature| 3 | 2 | 2
Blog | 1 | 4 | 2
Online Sales Capability | 1 | 5 | 3

### Site Map ###
A [Site Map](./assets/wireframes/sitemap.png) was produced for discussion prior to the initial project strategy meeting with the client.

### Wireframes ###
An [Initial Sketch](./assets/wireframes/rev0) was produced for discussion prior to the initial project strategy meeting with the client.

[Initial Wireframes](./assets/wireframes/rev1) showing different options for the Home and Gallery pages were produced using [balsamiq](https://balsamiq.com/index.html) and presented to the client. The base case was selected for the Home and Gallery pages.

[Responsive Design Wireframes](./assets/wireframes/rev2) were then developed based on the initial wireframes showing the Home, Gallery and About pages as viewed on desktop, tablet and mobile devices.

The home page features two large bright and colorful illustrations, a navigation menu, the NHT logo provided by the client and a link to https://www.comicartfans.com/. We decided to use two illustations as the artist's most colourful illustrations are in portrait orientation and this would allow 2 images to be tiled side by side on a desktop view, with one of the images being removed or the images being tiled vertically on smaller devices. 

The Gallery is presented as a seperate page. The gallery features the artist's favourite work divided into the categories "Illustrations" and "Caricatures". The images will be tiled in 2 rows corresponding to the "Illustrations" and "Caricatures" categories, with 3 columns shown on a desktop view, 2 columns shown on a tablet view and 1 column shown on a mobile view.

The Biography and Contact information is presented on the About NHT page. The about page will include a contact button which will open up a contact form.


### Design Choices ###

#### Fonts ####
**Varela Round** has been chosen as the font for all text content. The font is clean and modern and has a soft rounded feel which ties in well with comic art.
* font-family: 'Varela Round', sans-serif;  

#### Colours ####
The colour pallete was initally chosen based on the red of the Art Of NHT logo supplied by the client (#C93C1C). The mycolor (https://mycolor.space/) pallete generator tool was used to generate a complementary colour pallete based on the logo red (#C93C1C).
The initial colour pallete is shown below:
<img src="./assets/wireframes/nht-color-light.png" style="margin: 15px;">
* #C93C1C - NHT logo red</div>
* #FF7D54 - light red</div>
* #EDE9D0 - Off white (used for background)</div>
* #9A9793 - light grey</div>
* #7C7B7C - medium grey</div>
* #2F4858 - dark grey/blue</div>

After the home and gallery pages were constructed for review by the client using the chosen colour pallete chosen, an optional "dark mode" theme was created by the developer, using grey and dark colours for the background and functional elemnts of the website.
The client and developer both preferred the "dark mode" theme, as we felt that this showcased the artist's content better and really made the artwork stand out, so this option was selected and developed further into the final website.
The final colour pallete is shown below:
<img src="./assets/wireframes/nht-color-dark.png" style="margin: 15px;">
* White, used for highlighting</div>
* #FAFAFA - slightly off white, used for headings, highlighting, text and carousel indicators</div>
* #9A9793 - light grey used for navigation links and about page image outline</div>
* #404040 - dark grey used for block dividers, home page and gallery image outlines</div>
* #222831 - very dark grey used for background containers</div>
* #D65A31 - red used for links on about page</div>






## Technologies ##
### Languages ###
* [HTML](https://www.w3schools.com/html/default.asp)
* [CSS](https://www.w3schools.com/css/default.asp)
* [JavaScript](https://www.w3schools.com/js/default.asp)

### Frameworks Libraries and Tools ###
* [Bootstrap](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
* [jQuery](https://jquery.com/)
* [Font Awewsome](https://fontawesome.com/)
* [Google Fonts](https://fonts.google.com/)
* [Form Spree](https://help.formspree.io/hc/en-us)

## Features ##
### Features Implemented in Phase 1 ###
* Logo (including hover styling, links to home page if selected).
* Navigation Menu (including hover styling).
* Footer with link to artist page on [comicartfans](https://www.comicartfans.com/gallerydetail.asp?gcat=682) (including hover styling).
* Responsive Design
* Large home page image(s) which pop out into modals which include an image title if selected.
* Responsive Gallery page bootstrap image carousels to display art categorised into Illustrations and Caricatures. The carousels feature 1 image panel on small displays, 2 image panels on medium displays and 3 image panels on large displays. The carousel controls are subtly designed and are located under the images so as not to detract from the art, which is the focus of the website. The carousels have been set as static (the user has to seleect left or right to move the images on) as we feel this will improve the user experience. The carousel images pop out into modals which include an image title if selected.
* About page including artist biography, profile picture, contact links and large, bright call to action "Contact Nick" button. Profile picture, "Contact Form" link and "Contact Nick" button link to the contact form. The email link creates an email to Nick in the user's default email application.
* Contact form containing fields for Name, Email address and Message, and a large Send button. If all fields are entered correctly, an email is sent to nickhopet@hotmail.com. This feature is deployed using [Formspree](https://help.formspree.io/hc/en-us).

### Features To Be Implemented In Future Development Phases ###
* Subscribe feature on contact form - this may be implemented in the future if the artist decides to launch a web marketing campaign and has been added to the html code for the contact page, and commented out.
* Links to social media (dependant on artist being willing to join social media networks).
* Blog - (dependant on artist's time constaints).
* Online Sales Capability - (dependant on developer's technical capability).

### Design Changes During The Phase 1 Development ###
* Colour scheme - the colour scheme was changed mid-way through the development as described in the [Colours](#colours) section. The original colour theme is on the [master](https://github.com/richardhenyash/artofnht/tree/master) branch in the [GitHub](https://github.com/) repository. A new [darktheme](https://github.com/richardhenyash/artofnht/tree/darktheme) branch was created for the dark theme option and developed into the final website. This is set as the source for [GitHub](https://github.com/) pages.
* Gallery carousel controls - these were initially located at the bottom of the images within the image panels, but were moved underneath the carousel elements as we felt this provided a better user experience. See [gallery](gallery.html).
* Gallery carousel images - the images were initially being sized by using specific media queries for a range of device widths to set the height of the image. The gallery images were then resized to 1200px x 1680px, to enable bootstrap to auto size the gallery in 1 panel, 2 panels or 3 panels depending on screen size. This enables the gallery to scale fluidly and without degrading image quality for any screen size up to 3600px wide. See [gallery](gallery.html).
* Contact form - the contact form was initially developed as a modal pop-up form, but this was found not to work with the [Form Spree](https://help.formspree.io/hc/en-us) service. The contact form was redesigned as a [web page](contact.html).

## Testing ##

Testing information can be found in [Testing.md](Testing.md).

## Deployment ##
The website has been be deployed on GitHub pages using a custom domain purchased from [GoDaddy](https://uk.godaddy.com/), [Art Of NHT](www.artofnht.com). The steps required to achieve this are as follows:
* Open the DNS management page in the GoDaddy Domain Manager for the relevant domain which you have purchased through GoDaddy.
* Edit the Type "A" record. The IP address in the "Value" field should be changed to 185.199.108.153.
* Edit the Type "CNAME" record with the field "Name" set to "www". This should be changed to the relevant [GitHub](https://github.com/) pages web adrress (username.github.io). For my GitHub pages this is (richardhenyash.github.io).
* Add 3 further Type "A" records with "Name" set to "@", and "Value" fields set to IP addresses 185.199.109.153, 185.199.110.153, 185.199.111.153.
* Go to the Settings in the [GitHub](https://github.com/) repository.
* In the [GitHub](https://github.com/) Pages section, add the custom domain in the Custom domain box (artofnht.com).
* Tick "Enforce HTTPS".
* This will create a a new file in the root directory called CNAME, which should have one line of text which is the custom domain name (artofnht.com).

## Credits ##

I gained additional help and inspiration on dark mode theme colours from the following link:
* [codeburst](https://codeburst.io/50-shades-of-dark-mode-gray-d3e9907b1194)

I gained additional insight and help on bootstrap carousel functionality from the following links:
* [w3schools](https://www.w3schools.com/bootstrap/bootstrap_carousel.asp).
* [medium link 1](https://medium.com/wdstack/bootstrap-4-custom-carousel-94a537364fde).
* [Stack Overflow link 1](https://stackoverflow.com/questions/46249541/change-arrow-colors-in-bootstraps-carousel).
* [Stack Overflow link 2](https://stackoverflow.com/questions/47400874/bootstrap-4-change-position-of-carousel-controls/50352437).
* [Stack Overflow link 3](https://stackoverflow.com/questions/39536075/how-to-change-the-carousel-active-indicator-color-bootstrap/39536141).

Additional help on styling horizontal rulers was found at the following link:
* [w3schools](https://www.w3schools.com/howto/howto_css_style_hr.asp).

Additional help on fade-in animation was found at the following link:
* [Stack Overflow link 4](https://stackoverflow.com/questions/11679567/using-css-for-a-fade-in-effect-on-page-load).

Additional help on deploying the website to a godaddy domain using github pages was found at the following links:
* [github documentation](https://docs.github.com/en/free-pro-team@latest/github/working-with-github-pages/managing-a-custom-domain-for-your-github-pages-site)
* [medium link 2](https://medium.com/@JinnaBalu/godaddy-domain-with-github-pages-62aed906d4ef).

## Acknowledgements ##
Thanks to the following for your help and inspiration during this project:
* [Nick Hope-Thomson](https://artofnht.com/) for his inspirational art work, I hope this website helps you acheive your dreams!
* [Sarah Ash](https://artofnht.com/) for helping Nick to quickly put a clear and concise brief together.
* [Neringa Bickmore](https://github.com/neringabickmore) for getting me started off on the right footing and for your very helpful review and comments on the website and documentation.
* My remote mentor [Allen Thomas Varghese]() for the help getting me get started and for the helpful review and comments on the website.
