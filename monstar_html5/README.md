# Monstar Template
  
Monstar Template - A Scalable and Maintainable Architecture for Developing Mobile-first Responsive WordPress and Static Websites.  
  
  
## Getting Started  

Get started with Monstar, a scalable and maintainable architecture for building responsive, mobile-first web apps or sites.  
Monstar helps you build not only fast but scalable and maintainable web apps or sites. With Monstar you have a package that is built with the combined knowledge and effort of some great developers, from their methodology, codes, packages, etc...  
  
Ready to kick-start your project using Monstar?  
Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors.  
  
  
### Theming  
  
Customize Monstar with CSS variables or SASS variables for global style preferences for easy theming and component changes.
Here are the CSS variables we include (note that the :root is required). For more info, please check settings.css or the scss code base (mixins, variables etc...).
  
```
:root {
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
  
  
## Guide
  
Monstar Template is library for developing responsive, mobile-first websites.  
  
  
### Template Samples  
  
Here are some sample of what to expect on this template, For more info please check source file.  
  
#### Container:
```
<div class="container">
  <!-- Content here -->
</div>

<div class="container is-fluid">
  <!-- Content here -->
</div>
```
  
#### Flex:
```
<div class="flex">
  <div class="flex-item-12 flex-item-md-6"><!-- Content here --></div>
  <div class="flex-item-12 flex-item-md-6"><!-- Content here --></div>
</div>
```
  
#### Gap:
```
// You can omit adding class name "gap-item" on "gap" child item (only if the child item is a "div").
<div class="flex gap-20">
  <div class="gap-item"><!-- Content here --></div>
  <div class="gap-item"><!-- Content here --></div>
</div>
```
  
#### Button:
```
<a class="btn" href="#">Button</a>
```
  
#### Hidden:
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
  
#### Float:
```
<div class="clearfix">
  <div class="float-left">
    <!-- Floating content here -->
  </div>
</div>
```
  
#### Width and Height:
```
<div class="width-100 height-100">
  <!-- 100& width and height -->
</div>
```
  
#### Padding:
```
<div class="pab-10 pab-sm-20">
  <!-- Add padding (10px padding on 575px below, 20px padding on 576 and above) -->
</div>
```
  
#### Margin:
```
<div class="mab-10 mab-sm-20">
  <!-- Add margin (10px margin on 575px below, 20px margin on 576 and above) -->
</div>
```
  
#### List:
```
<ul class="list">
  <li><!-- List (Without style) --></li>
</ul>
```
  
#### Color:
```
<div class="bg-color-dark">
  <p class="color-light">Text color is light, container color is dark.</p>
</div>
```
  
  
## Author  
  
Monstar Lab Cebu  
[http://freemight.com/](http://freemight.com/)  
  
