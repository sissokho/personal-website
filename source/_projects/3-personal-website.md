---
extends: _layouts.project
title: Personal Website
slug: personal-website
description: Website to showcases my skills and my work.
type: main
thumbnail:
technologies:
    - Jigsaw
    - Tailwind CSS
    - Alpine.js
section: content
---

I have always felt the need to have a personal website, in order to showcase my skills and my work. In 2022, that need grew even stronger. So in April, after finishing with a 3 months contract, i decided to build it.

## Choosing the tech stack

Deciding upon the tech stack to use was my first challenge. I had a hard time choosing between a fancy solution (personal website + blog management system) or a simple website.

### Fancy vs simple

Initially i was leaning towards using Laravel to build a full fledged web application with many features like:

-   Content management system for blog articles.
-   Newsletter.
-   RSS Feed.
-   Automatic article sharing in social media.

But the more i explored the idea, the more it started to look cumbersome because the main reason for the website was to showcase my skills and projects. So i decided to take the simpler route. Just a couple of pages (home, work, contact) to get the job done.

### Static site generators

One day i stumbled upon a video of [Kevin Powell](https://www.kevinpowell.co/) building a [blog](https://www.youtube.com/watch?v=4wD00RT6d-g) with something called [eleventy](https://www.11ty.dev/), a [static site generator](https://www.cloudflare.com/learning/performance/static-site-generator/).

I have heard the term "static site generator" quite a while before that but i didn't bother understanding what it was about. After watching Kevin Powell's video, i told to myself: It is it. A static site generator is exactly what i need. Essentially it generates a full static HTML website based on raw data and a set of templates and gets it ready to serve to users ahead of time.

After some research i ended up choosing eleventy because i could build something with it without using a javascript frontend framework or library like Angular, Vue or React. It is simple with a lot of features as they say in their website:

> Eleventy, a simpler static site generator.

> Eleventy is not a JavaScript framework—that means zero boilerplate client-side JavaScript. We’re thinking long term and opting out of the framework rat race. The tool chain, code conventions, and modules you use in your front end stack are decoupled from this tool. Work from a solid foundation of pre-rendered templates that suit your project’s progressive enhancement baseline requirements.

But down the road while using twitter, i came across another one called [Jigsaw](https://jigsaw.tighten.com/).

### Jigsaw

As a Laravel enthusiast, as soon as i skimmed through the documentation of Jigsaw, i was tempted to use it. It offers some of the features that i regularly use in Laravel:

-   [Blade template](https://jigsaw.tighten.com/docs/content-blade/) as the templating engine.
-   [Laravel Mix](https://jigsaw.tighten.com/docs/compiling-assets/) for compiling the assets.

On top of that it was built by the team at [Tighten](https://tighten.com/), a featured partner of Laravel.

For all those reason, i decided to use it and i didn't regret it. I was able to understand it up quite fast and start building.

### Tailwind CSS

The first time i visited the Tailwind CSS documentation, i was skeptic. I thought that it was hard to use. After some time i started looking into Bootstrap 5. It was then that i told myself, if i bootstrap can click for me, Tailwind CSS would be no different.

Soon after, i started reading the documentation and started practicing by building simple components like buttons, avatars, navbars... Then i went on to try a couple of [Frontend Mentor challenges](https://www.frontendmentor.io/challenges) (which you can find in [my github account](https://github.com/sissokho)). Those helped me to become comfortable with Tailwind CSS. From there it became my goto css framework. It gives me the freedom to built whatever i want without worrying about organizing sass/css files (with imports, mixins, functions, partials...) or finding good names for classes.

### Alpine.js

I first used Alpine.js on the [Check4Decision search engine](https://check4decision.univ-thies.sn/search) for things like hiding/showing the menu on mobile, hiding/showing dropdown options and other little interactions. It is simple and offer a very cool way to implement javascript's functionalities.

On top of that combining it with Tailwind CSS and Laravel Blade allows me to extract repeated markup into components (Tailwind CSS + Alpine.js + Blade component = 😍).

## Conclusion

It was quite a good experience building this personal website, even more when it went online. I'm pretty satisfied with the way it looks even though it is not fancy. The main goal was only to showcase my work and skills.
