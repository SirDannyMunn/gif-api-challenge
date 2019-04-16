# REST Api Challenge

## Objective

Write an app which fetches an animated gif, either random or based on a serch term from local storage

* Make an endpoint which gets a gif either randomly or based on a search term 
* Include API_KEY header in request
* Reponse in following format 

```json
{
  "data": {
    "gif": {
      "title": "Some Gif"
      "url": "https://www.gifapi.com/some_gif.gif"
    }
  }
} 
```
* Use good conventions 


## Overview

This API consists of one enpoint, the search endpoint, which when given a request like so
```http://quidco-api-lumen.test:8000/v1/gifs?search=col```

It will search for the given parameter and return all gifs which have this text somwhere in their name.

It uses the single responsibillity principle by delegating the filtering/search functionallity to its own class - the GifFilter class. This works by using Laravel's scoping functionallity to provide a custom scope for a query - this time, the scope is passing the data off to the filtering class where more filtering is used on the query. The data is then correctly formatted using Laravel's recently added resource classes.

## Files included

* Gif
    * _Model for gifs_
* GifController
    * _Contoller logic for gifs_
* Filters
    * _Abstracted functionallity for filters_
* GifFilters
    * _filters for GET requests_
* GifTest
    * _Unit tests for Gif_
* GifResource
   *  _Resource class (data formatter) for gif_
