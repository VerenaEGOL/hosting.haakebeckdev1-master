# README #

### Set-up


```
#!shell


composer install
```

### .Marlinconfig PRODUCTION
```
#!php

MARLIN_STAGE=PRODUCTION

MARLINDB=
MARLINDB_HOST=
MARLINDB_USER=
MARLINDB_PASSWORD=

MARLINSMTP_HOST=
MARLINSMTP_PORT=
MARLINSMTP_USER=
MARLINSMTP_PASSWORD=

MAIL_RECIPIENT=info@haakebeck.de
MAIL_SENDER_NAME=haakebeck.de
```

### .Marlinconfig STAGING
```
#!php

MARLIN_STAGE=STAGING

MARLINDB=
MARLINDB_HOST=
MARLINDB_USER=
MARLINDB_PASSWORD=

MARLINSMTP_HOST=smtp.mailtrap.io 
MARLINSMTP_PORT=2525
MARLINSMTP_USER=362097726137c5119
MARLINSMTP_PASSWORD=a1548ea45121be

MAIL_RECIPIENT=christian@egol.de
MAIL_SENDER_NAME=christian@egol.de
```