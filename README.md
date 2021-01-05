# Art Of NHT

## Background
Nick Hope Thompson is a talented comic artist who has been drawing for fun and professionally for many years. He does not currently have an online presence. He has sold pieces of his comic art, has previously been commisioned to produce pieces and would like to increase his opportunities to work professionally producing comic art.

## Business Goals
To increase sales of Nick's art.

## Project Goals
To showcase the artist's portfolio, increase the artist's profile within the comic art community and to provide a means for prospective clients to engage.

## UX

### Project Strategy
To define the overall project strategy, an initial project strategy meeting was held with the client.

#### Opportunities Matrix
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

#### Initial Development Phase
The opportunities matrix was used to help decide which items should be included for the initial development phase (phase 1):
Item|Development Phase
----|-----------------
Create an online presence|1
Showcase portfolio of work to potential customers|1
Provide contact information to potential customers|1
Biography|1
Provide link to artist page on comicartfans.com|1
Subscribe|1
Increase social media followers|2
Create a blog|2
Develop online sales capability|3

### Project Scope
#### User Demographics
* The primary users of the site will be comic art fans. The demographics of comic art fans are quite wide - male and female from ages 5 up to 60 who have an appreciation for comic art.
* A simple, colorful and attractive design would fit this demographic. As the demographic is particularly interested in art and design, the site needs to reflect this and an attractive, vibrant and modern design is of high importance.

#### User Requirements
* Visually engaging
* Simple to navigate
* The key information should be layed out in a simple and clear way
* Resonsive design is required as users may be viewing the site on Mobile, Tablet or Desktop.

#### User Stories
* As a user I am searching for an artist to commission some work.
* As a user I am searching for comic art to buy.
* As a user I want to contact the artist.
* As a user I want to sign up for news and new content from the artist.
* As a user I want to browse comic art sites for inspiration.

#### Functional Requirements
* The user will need to be able to view a portfolio of the artist's work.
* The user requires contact information to enable them to contact the artist.
* The user requires the facility to sign up for news and new content from the artist.
* The user potentially requires pricing information. It was decided during the initial stategy meeting with the client that pricing information would not be disclosed on the website, but would be provided on request.

#### Constraints
* Developer skill set - the developer is currently unable to develop an online sales capability, but this may be considered for future development phases.
* The client is reluctant to create a social media presence on facebook, instagram etc, but does have an artist page on https://www.comicartfans.com/ which should be linked to.
* The client has time constaints on the amount of work he can produce as he has a full time job. For this reason, we discussed and decided to incorporate a Subscribe or Sign Up option, which would allow the artist to produce art and then contact a mailing list of prospective buyers. 

#### Business rules
* Copyright notices - all comic book characters are copyright of their respective owners. The copyright notice should appear on each page in the footer.

#### Features
The following key features have been identified and scored from 1 - 5 for importance and difficulty. The proposed development phase has also been indicated:
Feature|Importance|Difficulty|Development Phase
-------|----------|----------|-----------------
Navigation menu | 5 | 2 | 1
Portfolio images | 5 | 3 | 1
Contact form | 5 | 1 | 1
Biography | 4 | 2 | 1
Subscribe feature| 4 | 2 | 1
Copyright notices | 5 | 1 | 1
Link to comicartfans.com | 3 | 1 | 1
Links to social media | 2 | 1 | 2
Blog | 1 | 4 | 2
Online Sales Capability | 1 | 5 | 3

### Site Map
A [Site Map](./assets/wireframes/sitemap.png) was produced for discussion prior to the initial project strategy meeting with the client.

### Wireframes
An [Initial Sketch](./assets/wireframes/rev0) was produced for discussion prior to the initial project strategy meeting with the client.

[Initial Wireframes](./assets/wireframes/rev1) showing different options for the Home and Gallery pages were produced using [balsamiq](https://balsamiq.com/index.html) and presented to the client. The base case was selected for the Home and Gallery pages.

[Responsive Design Wireframes](./assets/wireframes/rev2) were then developed based on the initial wireframes showing the Home, Gallery and About pages as viewed on desktop, tablet and mobile devices.

The home page features two large bright and colorful illustrations, a navigation menu, the NHT logo provided by the client and a link to https://www.comicartfans.com/. We decided to use two illustations as the artist's most colourful illustrations are in portrait orientation and this would allow 2 images to be tiled side by side on a desktop view, with one of the images being removed or the images being tiled vertically on smaller devices. 

The Gallery is presented as a seperate page. The gallery will feature the artist's favourite pictures divided into the categories "Illustrations" and "Caricatures". The images will be tiled in 2 rows corresponding to the "Illustrations" and "Caricatures" categories, with 3 columns shown on a desktop view, 2 columns shown on a tablet view and 1 column shown on a mobile view.

The Biography and Contact information is presented on the About NHT page. The about page will include a contact button which will open up a contact form which will have a Sign Up option.

### Design Choices

#### Fonts
Varela Round has been chosen as the main font for the navigation menu, buttons, about text and copyright notice. The font is clean and modern and has a soft rounded feel which ties in well with comic art.

#### Colours
The colour pallete was initally chosen based on the red of the Art Of NHT logo supplied by the client (#C93C1C). The mycolor (https://mycolor.space/) pallete generator tool was used to generate a complementary colour pallete based on the logo red (#C93C1C).

After the home and gallery pages were constructed for review by the client using the chosen colour pallete chosen, an optional "dark mode" theme was created by the developer, using grey and dark colours for the background and functional elemnts of the website.
The client and developer both preferred the "dark mode" theme, so this was chosen and developed further into the final website.
Additional help and inspiration on dark mode theme colours:
https://codeburst.io/50-shades-of-dark-mode-gray-d3e9907b1194


## References
Bootstrap documentation: https://getbootstrap.com/docs/4.5/getting-started/introduction/

Additional help on bootstrap carousel:
https://www.w3schools.com/bootstrap/bootstrap_carousel.asp
https://medium.com/wdstack/bootstrap-4-custom-carousel-94a537364fde
https://stackoverflow.com/questions/46249541/change-arrow-colors-in-bootstraps-carousel
https://stackoverflow.com/questions/47400874/bootstrap-4-change-position-of-carousel-controls/50352437
https://stackoverflow.com/questions/39536075/how-to-change-the-carousel-active-indicator-color-bootstrap/39536141

Additional help on modal image popups:
https://getbootstrap.com/docs/4.5/components/modal/

Additional help on styling horizontal rulers:
https://www.w3schools.com/howto/howto_css_style_hr.asp

Additional help on fade-in animation:
https://stackoverflow.com/questions/11679567/using-css-for-a-fade-in-effect-on-page-load




