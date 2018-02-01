# Salesforce Lightning Search Hack

## Purpose

We needed the ability to screenpop search results on an inbound call using Zoiper. Easy in classic, requires base64 in Lightning (which Zoiper is incapable of generating on the fly).

All this application does is take a parameter (phone number) and generate a base64 encoded URL and 301 the user to the location.


## Copyright

Drew Hammond 2018 - All rights reserved until I look into more permissive licensing
