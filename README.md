# Magyar infó API

Magyar irányítószámok, városok lekérésére szolgálaó alkalmazás. A lekérdezésekhez HTTP requested kell küldeni.

## Szolgáltatások

1. Irányítószámok
2. Nevek (tervezett)

### Irányítószámok

#### Település név alapján irányítószám lekérése

A lekérés:

    GET http://hur.webmania.cc/zips/Békés.json

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

    GET http://hur.webmania.cc/zips/7300.json

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