# Monstar Template
  
Monstar Template - A Scalable and Maintainable Architecture for Developing Mobile-first Responsive WordPress and Static Websites.  
  
  
## Getting Started  

Get started with Monstar, a scalable and maintainable architecture for building responsive, mobile-first web apps or sites.  
Monstar helps you build not only fast but scalable and maintainable web apps or sites. With Monstar you have a package that is built with the combined knowledge and effort of some great developers, from their methodology, codes, packages, etc...  
  
Ready to kick-start your project using Monstar?  
Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors.  
  
  
### Content  
  
Discover what’s included in the package. Once downloaded, unzip the compressed folder and you’ll see something similar to this:  
  
```
monstar-template/
├── misc/
│   ├── fonts/
│   └── js/
├── monstar_html5/
│   └── * (The HTML5 Template)
├── monstar_wp/
│   └── * (The WordPress Base Theme/Template)
├── source/
│   ├── css
│   ├── js
│   └── scss
├── LICENCE.txt
├── README.md
└── .editorconfig
```
  
  
### Theming  
  
Customize Monstar with CSS variables or SASS variables for global style preferences for easy theming and component changes.
Here are the CSS variables we include (note that the :root is required). For more info, please check settings.css or the scss code base (mixins, variables etc...).
  
```
:root {

  /* Color */
  --primary: #263238;
  --secondary: #37474F;
  --success: #4CAF50;
  --warning: #FF5722;
  --danger: #F44336;
  --info: #2196F3;
  --light: #FAFAFA;
  --dark: #212121;

  --grey-50: #FAFAFA;
  --grey-100: #F5F5F5;
  --grey-200: #EEEEEE;
  --grey-300: #E0E0E0;
  --grey-400: #BDBDBD;
  --grey-500: #9E9E9E;
  --grey-600: #757575;
  --grey-700: #616161;
  --grey-800: #424242;
  --grey-900: #212121;

  /* font-family */
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
```
  
### Breakpoints  
  
Monstar use a handful of media queries to create sensible breakpoints for layouts and interfaces. 
These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.  
  
```
// Extra small devices (410px and up)
@media (min-width: 410px) {...}
  
// Small devices (576px and up)
@media (min-width: 576px) {...}

// Medium devices (768px and up)
@media (min-width: 768px) {...}

// Large devices (992px and up)
@media (min-width: 992px) {...}

// Extra large devices (1200px and up)
@media (min-width: 1200px) {...}
```
  
### Accessibility  
  
Content which should be visually hidden,
but remain accessible to assistive technologies such as screen readers, can be styled using the .sr-only class.
This will ensure that the control becomes visible once focused (for sighted keyboard users).  
  
```
<p class="text-danger">
  <span class="sr-only">Danger: </span>
  This action is not reversible
</p>
```
  
For visually hidden interactive controls, such as traditional “skip” links, .sr-only can be combined with the .is-focusable class. This will ensure that the control becomes visible once focused (for sighted keyboard users).  
  
```
<a class="sr-only is-focusable" href="#site-content">Skip to main content</a>
```
  
Note: To extend template's accessibility please see [WAI-ARIA](https://www.w3.org/WAI/standards-guidelines/aria/), [WCAG 2.0](https://www.w3.org/TR/WCAG20/) and similar accessibility standards and requirements.  
  
  
### Samples
Here are some sample of what to expect on this template, For more info please check *.css.  
  
##### Container
```
<div class="container">
  <!-- Content here -->
</div>

<div class="container container--fluid">
  <!-- Content here -->
</div>
```
  
##### Flex
```
<div class="flex">
  <div class="flex-item-12 flex-item-md-6"><!-- Content here --></div>
  <div class="flex-item-12 flex-item-md-6"><!-- Content here --></div>
</div>
```
  
##### Cluster Gap
```
// You can omit adding class name "gap-item" on "gap" child item (only if the child item is a "div").
<div class="flex gap-20">
  <div class="gap-item"><!-- Content here --></div>
  <div class="gap-item"><!-- Content here --></div>
</div>
```
  
##### Button
```
<a class="btn" href="#">Button</a>
```
  
##### Hidden
```
<div class="hidden">
  <!-- Hidden content here (all screen) -->
</div>

<div class="hidden-xs-min">
  <!-- Hidden content here (411px and up) -->
</div>

<div class="hidden-sm-min">
  <!-- Hidden content here (576px and up) -->
</div>

<div class="hidden-md-min">
  <!-- Hidden content here (768px and up) -->
</div>

<div class="hidden-lg-min">
  <!-- Hidden content here (992px and up) -->
</div>

<div class="hidden-xl-min">
  <!-- Hidden content here (1200px and up) -->
</div>

<div class="hidden-xs-max">
  <!-- Hidden content here (410px and down) -->
</div>

<div class="hidden-sm-max">
  <!-- Hidden content here (575px and down) -->
</div>

<div class="hidden-md-max">
  <!-- Hidden content here (767px and down) -->
</div>

<div class="hidden-lg-max">
  <!-- Hidden content here (991px and down) -->
</div>

<div class="hidden-xl-max">
  <!-- Hidden content here (1199px and down) -->
</div>
```
  
##### Float
```
<div class="clearfix">
  <div class="float-left">
    <!-- Floating content here -->
  </div>
</div>
```
  
##### Width and Height
```
<div class="width-100 height-100">
  <!-- 100& width and height -->
</div>
```
  
##### Padding
```
<div class="pab-10 pab-sm-20">
  <!-- Add padding (10px padding on 575px below, 20px padding on 576 and above) -->
</div>
```
  
##### Margin
```
<div class="mab-10 mab-sm-20">
  <!-- Add margin (10px margin on 575px below, 20px margin on 576 and above) -->
</div>
```
  
##### List
```
<ul class="list">
  <li><!-- List (Without style) --></li>
</ul>
```
  
##### Color
```
<div class="bg-color-dark">
  <p class="color-light">Text color is light, container color is dark.</p>
</div>
```
  
  
## Popular Methodologies (Guidelines)
  
### SMACSS - Scalable and Modular Architecture for CSS
SMACSS is a way to examine your design process and as a way to fit those rigid frameworks into a flexible thought process. It is an attempt to document a consistent approach to site development when using CSS.  
  
At the very core of SMACSS is categorization. By categorizing CSS rules, we begin to see patterns and can define better practices around each of these patterns.
**Base** - They are almost exclusively single element selectors but it could include attribute selectors, pseudo-class selectors, child selectors or sibling selectors. Essentially, a base style says that wherever this element is on the page, it should look like this.  
  
**Layout** - divide the page into sections. Layouts hold one or more modules together.  
  
**Module** - are the reusable, modular parts of our design. They are the callouts, the sidebar sections, the product lists and so on.  
  
**State** - are ways to describe how our modules or layouts will look when in a particular state. Is it hidden or expanded? Is it active or inactive? They are about describing how a module or layout looks on screens that are smaller or bigger. They are also about describing how a module might look in different views like the home page or the inside page.  
  
**Theme** - are similar to state rules in that they describe how modules or layouts might look. Most sites don’t require a layer of theming but it is good to be aware of it.  
  
By separating rules into the five categories, naming convention is beneficial for immediately understanding which category a particular style belongs to and its role within the overall scope of the page.  
  
```
// Example Module
.example { ... }

// Callout Module
.callout { ... }

// Callout Module with State
.callout.is-collapsed { ... }

// Form field module
.field { ... }

// Inline layout
.l-inline { ... }
```
  
[Read the full documentation of SMACSS](http://smacss.com/)  
  
  
### BEM - Block Element Modifier
Block Element Modifier is a methodology that helps you to create reusable components and code sharing in front-end development  
  
Let’s look how one particular element on a page can be implemented in BEM.  
  
We can have a normal button for usual cases, and two more states for different ones. Because we style blocks by class selectors with BEM, we can implement them using any tags we want (button, a or even div). The naming rules tell us to use block--modifier-value syntax.  
  
```
<button class="button">
  Normal button
</button>

<button class="button button--state-success">
  Success button
</button>

<button class="button button--state-danger">
  Danger button
</button>
```
  
```
.button {
  display: inline-block;
  border-radius: 3px;
  padding: 7px 12px;
  border: 1px solid #D5D5D5;
  background-image: linear-gradient(#EEE, #DDD);
  font: 700 13px/18px Helvetica, arial;
}

.button--state-success {
  color: #FFF;
  background: #569E3D linear-gradient(#79D858, #569E3D) repeat-x;
  border-color: #4A993E;
}

.button--state-danger {
  color: #900;
}
``` 
  
**Modularity** - Block styles are never dependent on other elements on a page, so you will never experience problems from cascading.  
  
**Reusability** - Composing independent blocks in different ways, and reusing them intelligently, reduces the amount of CSS code that you will have to maintain.  
  
**Structure** - BEM methodology gives your CSS code a solid structure that remains simple and easy to understand.  
  
[Read the full documentation of BEM](http://getbem.com/introduction/)  
  
  
### ITCSS - Inverted Triangle CSS
ITCSS stands for Inverted Triangle CSS and it helps you to organize your project CSS files in such a way that you can better deal with (not always easy-to-deal with) CSS specifics like global namespace, cascade and selectors specificity.  
  
One of the key principles of ITCSS is that it separates your CSS codebase to several sections (called layers), which take the form of the inverted triangle.  
  
```
_______________ Reach _______________

+++++++++++++++++++++++++++++++++++++   |
+              SETTING              +   |
++++           BASE/GENERIC      ++++   |
+++++++        OBJECT         +++++++   Specificity
++++++++++     COMPONTENT  ++++++++++   |
+++++++++++++  UTILITY  +++++++++++++   |
++++++++++++++++    +++++++++++++++++   |
```
  
**Settings** - Used with preprocessors and contain font, colors definitions, globally used mixins and functions etc.  
  
**Base** - Reset and/or normalize styles, box-sizing definition, etc. This is the first layer which generates actual CSS.  
  
**Layout** - Class-based selectors which define undecorated design patterns, for example media object known from OOCSS.  
  
**Components** - Specific UI components. This is where the majority of our work takes place and our UI components are often composed of Objects and Components.  
  
**Utilities** - Utilities and helper classes with ability to override anything which goes before in the triangle, eg. hide helper class.  
  
No official documentation for ITCSS yet, but you can try [Moonshine](https://github.com/jackryanoracoy/moonshine) and [Twilightbloom](https://github.com/jackryanoracoy/twilightbloom/) both are using ITCSS methodology.  
  
  
## Recommended Tools 
  
#### Visual Studio Code
Visual Studio Code is a source-code editor developed by Microsoft for Windows, Linux and macOS. It includes support for debugging, embedded Git control and GitHub, syntax highlighting, intelligent code completion, snippets, and code refactoring.  
[Read more on Wikipedia](https://en.wikipedia.org/wiki/Visual_Studio_Code)  
[Download VS Code](https://code.visualstudio.com/)  
  
#### GIT
Git is a distributed version-control system for tracking changes in source code during software development. It is designed for coordinating work among programmers, but it can be used to track changes in any set of files. Its goals include speed, data integrity, and support for distributed, non-linear workflows.  
[Read more on Wikipedia](https://en.wikipedia.org/wiki/Git)  
[Download GIT](https://git-scm.com/downloads)  
  
#### GitHub Desktop - Electron
GitHub Desktop is an open source Electron-based GitHub app. It is written in TypeScript and uses React.  
[Read more on Wikipedia](https://en.wikipedia.org/wiki/Atlassian)  
[Download GitHub Desktop](https://desktop.github.com/)  
  
#### Sourcetree - Atlassian
A Git GUI that offers a visual representation of your repositories. Sourcetree is a free Git client for Windows and Mac.  
[Read more on Wikipedia](https://en.wikipedia.org/wiki/Electron_(software_framework))  
[Download Sourcetree](https://www.sourcetreeapp.com/)  
  
#### GitKraken - Axosoft
The Git GUI Client for Windows/Mac/Linux development.  
[Read more on Wikipedia](https://en.wikipedia.org/wiki/Axosoft)  
[Download GitKraken](https://www.gitkraken.com/)  
  
  
## Recommended Plugins
  
#### EditorConfig
EditorConfig helps maintain consistent coding styles for multiple developers working on the same project across various editors and IDEs. The EditorConfig project consists of a file format for defining coding styles and a collection of text editor plugins that enable editors to read the file format and adhere to defined styles. EditorConfig files are easily readable and they work nicely with version control systems.  
[Download EditorConfig](https://editorconfig.org/#download)  
  
#### Live SASS Compiler
A VSCode Extension that help you to compile/transpile your SASS/SCSS files to CSS files at realtime with live browser reload.  
[Download Live SASS Compiler](https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass)  
  
#### Autoprefixer
Parse CSS and add vendor prefixes automatically.  
[Download Autoprefixer](https://marketplace.visualstudio.com/items?itemName=mrmlnc.vscode-autoprefixer)  
  
  
## Includes  
  
Some great works that are included in this template.  
   
* [Modernizr (v3.7.1)](https://modernizr.com/)  
* [Object-Fit Images (v3.2.3)](https://github.com/fregante/object-fit-images/)  
* [Normalize (v8.0.1)](https://necolas.github.io/normalize.css/)  
* [Font Awesome (v5.10.1)](https://fontawesome.com/)  
* [Google Fonts](https://fonts.google.com/)  
* [EditorConfig](https://editorconfig.org)  
  
  
## Author  
  
Monstar Lab Cebu Philippines  
[https://www.monstarlab.ph/](https://www.monstarlab.ph/)  
[http://freemight.com/](http://freemight.com/)  
  
  
## License  
  
This project is licensed under the MIT License - see the [LICENSE.txt](LICENSE.txt) file for details.  
