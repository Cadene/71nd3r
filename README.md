# 71nd3r hack

*71nd3r hack* is an improved online interface for tinder, incorporing a powerfull Convolutional Neural Network.

## Installation

## Contributing

[CONTRIBUTING.md](http://)

## Utils

### Tinder API

URL: `https://api.gotinder.com`

Header:
```
{
    "X-Auth-Token: EAAGm0PX4ZCpsBAAKc...", # tinder access token
    "User-Agent: Tinder/4.6.1 (iPhone; iOS 9.0.1; Scale/2.00)",
    "Content-type: application/json; charset=utf-8",
    "platform: ios",
    "app-version: 371",
    "os_version: 90000000001"
}
```

Note: `$ ruby fb_token.rb email pass > access_token.txt` to get access to tinder

#### POST /auth

Get your tinder token. (expires date?)

Example: 
`https://api.gotinder.com/auth`
```
{
    "facebook_token": "CAAGm0PX4Z...",
    "facebook_id": "10152178465738089" # http://findmyfbid.com/
}
```

Response:
```
{
    "token": "15a90773-19f1-40a8-a3bc-83598e73e155",
    "user": ...
}
```

Fail:
```
{
    "code": 401,
    "error": "FacebookTokenRequired"
}
```

#### GET /like/[userid]

Send a like to a user.

Example:
`https://api.gotinder.com/like/557ee4f42b50d9e02c...`

Response:
```
{
    "match": true
}
```
or
```
{
    "match": false
}
```

#### POST /like/[userid]/super

Send a superlike to a user.

Example:
`https://api.gotinder.com/like/5606d56d...43947/super/`

Response:
```
{
    "match": true
}
```
or
```
{
    "match": false
}
```

#### GET /pass/[userid]

Send a dislike (swip left) to a user.

Example:
`https://api.gotinder.com/pass/557ee4f42b50d9e02c...`

Response:
```
{
    "status": 200
}
```

#### POST /user/message/[matchid]

Send a message to a user.

Example:
`https://api.gotinder.com/user/message/5408951d45e6ce92720a...`
```
{
    "message": "Cyrielle, do you like avocado?"
}
```

Response:
```
{
    "_id": "53467235483cb56c475cc1d6",
    "from": "53430689ab3c04c13e006ffb",
    "to": "533a59ea52046fc077002815",
    "match_id": "53464b0728ac73976d0a3fbf",
    "sent_date": "2014-04-10T10:28:05.764Z",
    "message": "Cyrielle, do you like avocado?",
    "created_date": "2014-04-10T10:28:05.764Z"
}
```

#### GET /meta

Get hidden variables such as the amount of remaining likes.

Example:
`https://api.gotinder.com/meta`

Response: [link](https://github.com/Cadene/71nd3r/blob/master/curl/tinder_meta.json)

#### POST /user/ping

Update your location.

Example:
`https://api.gotinder.com/user/ping`
```
{
    "lat": 48.8534100,
    "lon": 2.3488000
}

Response:
```
{
    "status": 200
}
```
or
```
{
    "error": "position change not significant"
}
```

#### POST /profile

Update your profile.

Parameters:
<table>
  <tbody>
    <tr>
      <td>Gender</td>
      <td>0: Male<br>
      1: Female</td>
    </tr>
    <tr>
      <td>age_filter_min</td>
      <td>int of min age match</td>
    </tr>
    <tr>
      <td>age_filter_max</td>
      <td>int of max age match</td>
    </tr>
    <tr>
        <td>distance_filter</td>
        <td>max search radius in kilometers</td>
    </tr>
  </tbody>
</table>

Example:
`https://api.gotinder.com/profile`
```
{
    "age_filter_min": 26,
    "gender": 1,
    "age_filter_max": 32,
    "distance_filter": 14
}
``

Response:
```
{
    "status": 200
}
```

#### POST /report/[userid]

Report a user.

Parameters:
<table>
  <tbody>
    <tr>
      <td>cause</td>
      <td>1: Spam<br>
      2: Inappropriate/offensive</td>
    </tr>
  </tbody>
</table>

Example:
`https://api.gotinder.com/report/87s786edq7...`
```
{
    "cause": 1
}
```

Response:
```
{
    "status": 200
}
```


#### GET /recs

Get an amount of profiles (not sorted) to like or pass.

Example:
`https://api.gotinder.com/recs`

Response: [link](https://github.com/Cadene/71nd3r/blob/master/curl/tinder_recs.json)
```

#### POST /updates

Get all your matches associated with your messages since a certain date.

Example:
`https://api.gotinder.com/updates`
```
{
    "last_activity_date": "2015-10-30T09:32:41.154Z"
}
```
or
```
{
    "last_activity_date": ""
}
```

Response: [link](https://github.com/Cadene/71nd3r/blob/master/curl/tinder_updates.json)
```
{
    "matches": [{
        "_id": "53464b0728ac73976d0a3fbf",
        "messages": [{
            "_id": "534651198ce6da797248c1a3",
            "match_id": "53464b0728ac73976d0a3fbf",
            "to": "53430689ab3c04c13e006ffb",
            "from": "533a59ea52046fc077002815",
            "message": "hi  .... how is it going?",
            "sent_date": "2014-04-10T08:06:49.800Z",
            "created_date": "2014-04-10T08:06:49.800Z",
            "timestamp": 1397117209800
        }, {
            "_id": "53466fd298b7278b72156523",
            "match_id": "53464b0728ac73976d0a3fbf",
            "to": "533a59ea52046fc077002815",
            "from": "53430689ab3c04c13e006ffb",
            "message": "Good thanks you? :)",
            "sent_date": "2014-04-10T10:17:54.379Z",
            "created_date": "2014-04-10T10:17:54.379Z",
            "timestamp": 1397125074379
        }],
        "last_activity_date": "2014-04-10T10:17:54.379Z"
    }],
    "blocks": [],
    "lists": [],
    "deleted_lists": [],
    "last_activity_date": "2014-04-10T10:17:54.379Z"
}
```

#### GET /user/[userid]

Get informations about a certain user.

Example:
`https://api.gotinder.com/user/5606d56d...`

Response: [link](https://github.com/Cadene/71nd3r/blob/master/curl/tinder_user.json)


### Usefull links

+ `https://gist.github.com/rtt/10403467`
+ `https://github.com/charliewolf/pynder`

### Pyramid

+ `https://github.com/uralbash/awesome-pyramid