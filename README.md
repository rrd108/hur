# Magyar infó API

Magyar irányítószámok, városok lekérésére szolgáló alkalmazás. A lekérdezésekhez HTTP requested kell küldeni.

## Szolgáltatások

1. Irányítószámok
2. Utónevek
3. Termékek


### 1. Irányítószámok

#### Település név alapján irányítószám lekérése

A lekérés:

    GET https://hur.webmania.cc/zips/Békés.json

A válasz:

````json
{
  "zips": [
    {
      "id": 1851,
      "country_id": 1,
      "zip": "5630",
      "name": "Békés",
      "lat": 46.798691,
      "lng": 21.112356,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    },
    {
      "id": 1852,
      "country_id": 1,
      "zip": "5631",
      "name": "Békés",
      "lat": 46.193275,
      "lng": 18.731958,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    }
  ]
}
````

#### Irányítószám alapján települések lekérése

A lekérés:

    GET https://hur.webmania.cc/zips/7300.json

A válasz:

````json
{
  "zips": [
    {
      "id": 2337,
      "country_id": 1,
      "zip": "7300",
      "name": "Mecsekpölöske",
      "lat": 46.223286,
      "lng": 18.211739,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    },
    {
      "id": 2338,
      "country_id": 1,
      "zip": "7300",
      "name": "Komló",
      "lat": 46.192978,
      "lng": 18.251213,
      "country": {
        "id": 1,
        "name": "Hungary"
      }
    }
  ]
}
````

### 2. Utónevek

#### Utónevek lekérése

A lekérés:

    GET https://hur.webmania.cc/firstnames/zolt.json

A válasz:

````json
{
  "firstnames": [
    {
      "id": 4320,
      "sex": "M",
      "name": "Zolta"
    },
    {
      "id": 4321,
      "sex": "M",
      "name": "Zoltán"
    },
    {
      "id": 2455,
      "sex": "F",
      "name": "Zoltána"
    }
  ]
}
````

##### Szűrés

Az eredmény szűrhető nemek szerint.

* Férfi nevek `https://hur.webmania.cc/firstnames/zolt.json?sex=m`</li>
* Női nevek `https://hur.webmania.cc/firstnames/zolt.json?sex=f`</li>

### 3. Termékek

A lekérés:

    GET https://hur.webmania.cc/products.json

A válasz:

````json
{
  "products":[
    {
      "id":1,
      "category":"Bogyós",
      "name":"Málna",
      "description":"Kézzel termelt egészség",
      "picture":"https://hur.webmania.cc/img/malna.jpg",
      "price":3800,
      "stock":500
    },
    {
      "id":2,
      "category":"Bogyós",
      "name":"Áfonya",
      "description":"Az erdő kincse az otthonodba",
      "picture":"https://hur.webmania.cc/img/afonya.jpg",
      "price":3250,
      "stock":120
    }
  ]
}
````
