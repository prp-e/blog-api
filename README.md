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

***Example**
```json
{
    "name"     : "John Doe",
    "email"    : "johndoe@example.com",
    "password" : "j0hndo3s@mazingp4ssword"
}
```

**Request example**
```
curl -X POST -i 'http://127.0.0.1:8000/api/signup' --data '{
    "name":"John Doe",
    "email":"johndoe2@example.com",
    "password":"j0hndo3s@mazingp4ssword"
}'
``` 