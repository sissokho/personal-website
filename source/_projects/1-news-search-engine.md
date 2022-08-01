---
extends: _layouts.project
title: News search engine
slug: news-search-engine
description: Search engine that allow users to search through news articles aggregated from more than 100 senegalese online sources.
type: main
thumbnail: search-engine.png
live_url: https://check4decision.univ-thies.sn/search/
tags:
    - Laravel
    - Livewire
    - CSS/SASS
    - Alpine.js
    - Javascript
    - ApexCharts.js
    - Spring Boot
    - Apache Lucene
section: content
---

The Web, nowadays, is one of the privileged sources in the daily quest for diversified information. It has really influenced the media industry. In Senegal, we have more than a hundred online news sites. However, this growing quantity does not allow the reader to have a global view of all the articles concerning a given subject because they are scattered on hundreds of sites and it is difficult for them to visit them all.

To help address that problem, it was decided, by the directors of the [Check4Decision project](https://check4decision.univ-thies.sn/), to build a search engine which will give users access to a wide variety of news articles collected from more than a hundred news site.

## How does the search engine work ?

Building a search engine is not an easy task. A crawler is needed to collect documents from the Web. Storage space must be used to store the [indexes](https://en.wikipedia.org/wiki/Search_engine_indexing). The indexing system must process thousands of documents. And finally, the queries must be processed and the results delivered to the users.

[Our search engine](https://check4decision.univ-thies.sn/search) is made of several components that interact with each other to ensure proper operation during articles indexing and searching. The figure below shows the interaction between the components.

<img
src="/assets/images/work/check4decision-website/components-interaction.png"
alt="Different components of the search engine and their interaction"
width="768"
height="367"
loading="lazy"
decoding="async">

In a simple way, The system works as follows: articles are extracted by a crawler and saved in a database. During the indexing phase, a Java script takes care of retrieving from the database, articles that have not yet been indexed, and adds them to the index using [Lucene](https://lucene.apache.org/). And during the search phase, the query entered by the user on the interface is sent to a Spring Boot API, which uses Lucene to parse the query and find the relevant results in the index, and then return them to the user.

### Database

The news articles, once collected by a crawler (called Crawler4Senegal), are first saved in a database before being indexed.

Using a database allows us to be prepared for future failures such as the corruption of certain files in the index, or the damage of the latter. It also allows us to store certain types of data which are not indexed but which can be useful (Ex: the number of times that an article was consulted).

### Indexing

Every day at 8am, 12pm, 3pm and 8pm, the newly collected articles stored in the database are added to the index.

To index these articles, we use a technology called [Apache Lucene](https://lucene.apache.org/) which is an open source library written in Java that provides powerful indexing and searching features. It can index and make searchable any data from which text can be extracted, regardless of the source of the data, its format, or even its language. Similarly, with the help of Lucene, data stored in databases can be indexed, giving developers rich full-text search capabilities that many databases provide on a limited basis.

### Searching

After indexing the articles, Lucene is ready to perform searches based on user queries.

After Lucene has searched for the articles the users need, it sorts them according to certain criterias and then returns the results.

### Spring boot API

The goal is to respond to user queries. To achieve that, we needed a way to make the user facing application communicate with the search system. The chosen solution was to create an internal API with Spring Boot.

This API allows us to encapsulate the details of the indexing and searching, which makes it much easier to use from any programming language and even from the command line. You don't need to know how the system is implemented. All you need to do is send the query to the API and you will get the answers.

### User Facing Application

To allow users to search for news articles, we built a web application with Laravel to communicate with the API. like any other search engine, they are redirected to the original post if they want to read more. They can also download articles in csv, excel or json format.

Apart from Laravel, We also use Alpine.js and Livewire to add some dynamic features like:

-   showing/hiding menus and dropdown options.
-   incrementing the number of views for an article (without refreshing the browser) when the user is redirected to the original post.
-   store some information when a user downloads an article (without refreshing the browser).

In addition to the search related features, we have also added a [simple dashboard](https://check4decision.univ-thies.sn/search/dashboard/articles) to show some statistics about the search engine like the total number of searches, the number of articles indexed, etc.

## Conclusion

The goal was to build a search engine for online senegalese news. After a study of the architecture of the existing search engines, we were able, thanks to the powerful features of Apache Lucene, to make it happen.

The search engine index currently contains more than 285,000 articles collected from 111 online press sites.
