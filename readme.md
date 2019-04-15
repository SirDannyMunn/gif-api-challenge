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

## Plan

* Lumen 
* Remove redundant files
* Files to make
    * Gif
      _Model for gifs_
      * Functions:
        * scopeFilter
    * GifController
      _Contoller logic for gifs_
      * Functions:
        * Index
    * GifFilter
      _Abstracted filters for GET requests_
      * Functions:
        * Random
    * GifTest
      * Functions 
        * TestGetRandom
    * GifData
      json file of locations
    * Gifs/*
      Storage location for gif 