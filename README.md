# API Documentation 

## Endpoints 

1. [/api/signup](#signup)
2. [/api/login](#login)
3. [/api/posts](#posts)
    1. [Create a post](#create-a-post)
    2. [Update a post](#update-a-post)
    3. [Remove a post](#remove-a-post)


## signup 

**URL** : `/api/signup`

**METHOD** : _POST_

**Data constrains**
```json
{
    "name"     : [A valid string],
    "email"    : [A valid email address],
    "password" : [A valid string]
}
``` 

**Example**
```json
{
    "name"     : "John Doe",
    "email"    : "johndoe@example.com",
    "password" : "j0hndo3s@mazingp4ssword"
}
```

**Request example**
```
curl -X POST -H 'Content-Type: application/json' -i 'http://127.0.0.1:8000/api/signup' --data '{
    "name":"John Doe",
    "email":"johndoe2@example.com",
    "password":"j0hndo3s@mazingp4ssword"
}'
``` 

## login

**URL** : `/api/login`

**METHOD** : _POST_

**Data constrains**
```json
{
    "email"    : [A valid email address],
    "password" : [A valid string]
}
``` 

**Example**
```json
{
    "email"    : "johndoe@example.com",
    "password" : "j0hndo3s@mazingp4ssword"
}
```

**Request example**
```
curl -X POST -H 'Content-Type: application/json' -i 'http://127.0.0.1:8000/api/login' --data '{
    "email":"johndoe2@example.com",
    "password":"j0hndo3s@mazingp4ssword"
}
```

**Response**
```json
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYxMTA3ODUwMSwiZXhwIjoxNjExMDgyMTAxLCJuYmYiOjE2MTEwNzg1MDEsImp0aSI6ImZuZUxwZlAzQzBxNVo1SXAiLCJzdWIiOjMsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G_6ZA2wF59Fd832Ohb4qQs68JRMitoswBFZ4THXH9KQ",
  "type": "bearer",
  "expires_in": 3600
}
``` 

## posts

**URL** : `/api/posts`

**METHOD** : _GET_

**Request example**
```
curl -X GET -i 'http://127.0.0.1:8000/api/posts'
```
