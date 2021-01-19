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

### Create a post 

**URL** : `/api/posts`

**METHOD** : _POST_

**Data constrains**
```json
{
    "title" : [A valid string], 
    "slug"  : [A - seperated string], 
    "body"  : [The content of your post]
}
``` 

**Example**
```json
{
    "title" : "May the force be with you", 
    "slug"  : "may-the-force-be-with-you", 
    "body"  : "This is a famous phrase from star wars"
}
```

**Request example**
```
curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYxMTA3ODUwMSwiZXhwIjoxNjExMDgyMTAxLCJuYmYiOjE2MTEwNzg1MDEsImp0aSI6ImZuZUxwZlAzQzBxNVo1SXAiLCJzdWIiOjMsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G_6ZA2wF59Fd832Ohb4qQs68JRMitoswBFZ4THXH9KQ' -i 'http://127.0.0.1:8000/api/posts' --data '{
    "title" : "May the force be with you", 
    "slug"  : "may-the-force-be-with-you", 
    "body"  : "This is a famous phrase from star wars"
}'
```

**Response**
```json
{
  "title": "May the force be with you",
  "slug": "may-the-force-be-with-you",
  "body": "This is a famous phrase from star wars",
  "user_id": 3,
  "updated_at": "2021-01-19T17:58:20.000000Z",
  "created_at": "2021-01-19T17:58:20.000000Z",
  "id": 5
}
``` 

### Update a post 

**URL** : `/api/posts/:id`

**METHOD** : _PUT_

**Data constrains**
```json
{
    "title" : [A valid string], 
    "slug"  : [A - seperated string], 
    "body"  : [The content of your post]
}
``` 

**Example**
```json
{
    "title" : "May the force be with you", 
    "slug"  : "may-the-force-be-with-you", 
    "body"  : "This is a famous phrase from star wars, and I hate it. "
}
```

**Request example**
```
curl -X PUT -H 'Content-Type: application/json' -H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYxMTA3ODUwMSwiZXhwIjoxNjExMDgyMTAxLCJuYmYiOjE2MTEwNzg1MDEsImp0aSI6ImZuZUxwZlAzQzBxNVo1SXAiLCJzdWIiOjMsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G_6ZA2wF59Fd832Ohb4qQs68JRMitoswBFZ4THXH9KQ' -i 'http://127.0.0.1:8000/api/posts/5' --data '{
    "title" : "May the force be with you", 
    "slug"  : "may-the-force-be-with-you", 
    "body"  : "This is a famous phrase from star wars, and I hate it. "
}'
```

**Response**
```json
{
  "id": 5,
  "user_id": 3,
  "title": "May the force be with you",
  "slug": "may-the-force-be-with-you",
  "body": "This is a famous phrase from star wars, and I hate it.",
  "created_at": "2021-01-19T17:58:20.000000Z",
  "updated_at": "2021-01-19T17:59:47.000000Z"
}
``` 

### Remove a post

**URL** : `/api/posts/:id`

**METHOD** : _DELETE_

**Request example**
```
curl -X DELETE -H 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYxMTA3ODUwMSwiZXhwIjoxNjExMDgyMTAxLCJuYmYiOjE2MTEwNzg1MDEsImp0aSI6ImZuZUxwZlAzQzBxNVo1SXAiLCJzdWIiOjMsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.G_6ZA2wF59Fd832Ohb4qQs68JRMitoswBFZ4THXH9KQ' -i 'http://127.0.0.1:8000/api/posts/5'
```
