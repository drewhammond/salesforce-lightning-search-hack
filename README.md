# Salesforce Lightning Search Hack

## Purpose

We needed the ability to screenpop search results on an inbound call using Zoiper. Easy in classic, but Lightning
 obfuscates the URLrequires base64 in Lightning (which Zoiper is incapable of generating on the fly).

All this application does is take a parameter (phone number) and generate a base64 encoded URL and 301 the user to the location.

## Installation

Deploy application to server accessible from client computers

```bash
# Install application
git clone git@github.com:drewhammond/salesforce-lightning-search-hack.git /path/to/application
cd /path/to/application
composer install
php artisan key:generate
```

Define your Salesforce instance URL:

```
# .env
SALESFORCE_BASE_URL=https://example.my.salesforce.com
```

## Usage

Configure ZoiPer to Open URL on inbound call with the following URL:

`https://application.example.com/search?string={number}`

## Copyright

Drew Hammond 2018 - All rights reserved until I look into more permissive licensing
