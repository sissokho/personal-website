---
extends: _layouts.project
title: Covid-19 tracker
slug: covid-19-tracker
description: Web Application that tracked the evolution of the Coronavirus pandemic in Senegal during the first wave. It had interactive tools, including maps, epidemic curves and other charts and graphics, which allowed users to track and explore the latest trends.
type: main
thumbnail: covid-tracker.png
tags:
    - Laravel
    - CSS/SASS
    - Javascript
    - Chart.js
    - jQuery Mapael
section: content
---

When the covid-19 cases started to grow in our country, there were many initiatives to help people get up-to-date statistics. Motivated by all those initiatives, the directors of the [Check4Decision project](https://check4decision.uvs.sn/) wanted to bring their contribution by putting at the disposal of the people a web application where they would not only see statistics but also have access to news about the coronavirus all around the country.

I was tasked to build it and we wanted to offer as many useful features as possible: statistics, evolution of the different type of cases (total, new, deaths, recovered, under treatment), covid news by city and a national map showing the trends by city.

<img
src="/assets/images/work/covid-tracker/covid-tracker-6.png"
alt="Project screenshot"
width="768"
height="367"
decoding="async">

## Statistics

The web application showed various type of statistics:

-   Total cases
-   Under treatment
-   New cases
-   Recovered
-   Deaths

We also had line graphs showing the evolution of the cases. Those graph could be expanded by clicking the icon on the bottom right of the graph.

<img
src="/assets/images/work/covid-tracker/covid-tracker-2.png"
alt="Line graph expanded"
width="768"
height="367"
loading="lazy"
decoding="async">

## Map

The map was probably the main feature. It was built with [jQuery Mapael](https://github.com/neveldo/jQuery-Mapael). Each city was colored depending on the number of its total cases. By hovering over a city, it showed a popup containing its related number of cases and new cases.

<img
src="/assets/images/work/covid-tracker/covid-tracker-4.png"
alt="Stats are shown when user hover over a city"
width="768"
height="367"
loading="lazy"
decoding="async">

Users could also show the trends for a specific date by using the slider at the top.

<img
src="/assets/images/work/covid-tracker/covid-tracker-5.png"
alt="Show stats for a specific date with the date slider"
width="768"
height="367"
loading="lazy"
decoding="async">

## News by city

Another useful feature was displaying covid news. when a user clicked on a city, covid news related to that city was shown at the right side of the screen. Those news came from the Check4Decision's collected articles index.

## Why it was shut down

When building it, we decided to show detailed statistics for each city. In the beginning we could rely on the ministry of health. But some time after, they stop giving detailed numbers. We got to a point where we could only have data for only 1 or 2 cities.

In 2021, we rebuild it with Laravel in hope to have up-to-date data to make it work again but we were unable to find reliable sources. Because of that it was decided to shut it down.

## Conclusion

It was my third project at Check4Decision after the website and the search engine. It was was quite successful. We had many good feedbacks but unfortunately we were force to shut it down.
