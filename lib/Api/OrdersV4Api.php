<?php
/**
 * OrdersV4Api
 * PHP version 5
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OTTO Market API
 *
 * # Home Welcome to OTTO Market API Documentation. At this page you will find all information to use the API for your business.  ## Become an OTTO Market partner Follow these steps: - Go to [otto.market](https://www.otto.market) - Inform yourself about our benefits - Register as a partner - Get access to our partner portal \"OTTO Partner Connect (OPC)\" - Deliver all necessary documents and data & sign the contract - Go to OPC and request your API user  ## Process Workflow  Given below is the overall process workflow of how different services interact within otto market.  <img src=\"/docs/process_information.png\" alt=\"Process Workflow\"/>  ## General Changelog This changelog will contain information about important changes. Most important things are legal issues, version upgrades and not backward compatible changes. Newest information will be placed on top of the table.  | Date | Interface | Classification | Description | | ---- | --------- | -------------- | ----------- | | 2021-11-26 | [Products](../docs#tag/Products-V2) | Sandbox | Version 2 of /products is now available in the sandbox environment.| | 2021-04-30 | [Orders](../docs#tag/Orders-V4) | New Version | Version 4 is now live. We plan to go offline with Version 3 (v3) by  2021-10-31 | | 2021-04-06 | [Products](../docs#tag/Products-V2) | New Version | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 01.11.2021. | | 2020-04-14 | [Receipts](../docs#tag/Receipts-V2) | New Version | Version 2 is now live. We plan to go offline with Version 1 (v1) earliest by 14th October,2020. | | 2020-04-20 | [Orders](../docs#tag/Orders-V4) | New Version | Version 3 is now live. We plan to go offline with Version 2 (v2) earliest by 01.11.2020. | | 2019-09-01 | [Orders](../docs#tag/Orders-V4) | New Version | Version 1 will be outdated in some time. Please change to version 2, if it is marked as ready. |  ## Get Support If you have any questions and remarks or if you need support, please reach out to us via [e-mail](mailto:support@otto.market). We will get back to you as soon as possible.  # Partner API Developer's Guide The Developer's Guide is targeted at developers and people with technical background who are already a partner of OTTO Market or are interested in becoming a partner. The aim is to help you as a partner of OTTO Market to connect to and to work with the OTTO Partner API. It describes some common implementation patterns and helps you to understand how processes work. Detailed information about the concrete interfaces can be accessed by clicking onto the single tabs.  ## Authorization (OAuth2)  <!-- ReDoc-Inject: <security-definitions> -->  ### Fetch access token  In order to fetch an authorization token you must have an API user with a password. You can use the following cURL command to receive your token. Make sure to include your username and password in the command (without leading and trailing < >) and to URL-encode special characters appropriately. ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'Cache-Control: no-cache' \\   -d 'username=<YourUsername>&password=<YourPassword>&grant_type=password&client_id=token-otto-api' ```  Alternatively, you can let cURL encode the POST data by using `--data-urlencode` instead: ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'Cache-Control: no-cache' \\   --data-urlencode username=<YourUsername> \\   --data-urlencode password=<YourPassword> \\   --data-urlencode grant_type=password \\   --data-urlencode client_id=token-otto-api ```  The response of the request will look like the following example. The token itself can be extracted from the <code class=\"inline\">access_token</code> value. ``` {   \"access_token\": \"eyJhbGciOiJSUzI1NiISInR5cCIgOiAiSldUIiwia2lkIiA6ICJTd3ExRDRvYVBKUFQzMER3dmlZRkVVV2hRaEJtMEdPRlpWVWIwYWEteDBjIn0.eyJqdGkiOiIyMTg5Y2NjNC02NjU5LTQ1YmMtYjliMS1jYTIzMDMxOGQ3NmQiLCJleHAiOjE1ODQ5ODg3NjQsIm5iZiI6MCwiaWF0IjoxNTg0OTg1MTY0LCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvb3R0by1wYXJ0bmVyIiwic3ViIjoiODkwYmZkYjEtMTJkZS00OTY0LWJmMzgtYWQ1NzEyOTc4NjU4IiwidHlwIjoiQmVhcmVyIiwiYXpwIjoidG9rZW4tb3R0by1hcGkiLCJhdXRoX3RpbWUiOjAsInNlc3Npb25fc3RhdGUiOiIzZTA3MTBiMi1iNTdhLTRjYjAtYTUxZC02ZGU2MGE5OTczNTYiLCJhY3IiOiIxIiwic2NvcGUiOiJwdW1iYS1yb2xlcy1hcHAtcG9ydGFsIHBhcnRuZXIgZW1haWwgcHJvZmlsZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsiUHJvZHVjdHNfV3JpdGUiLCJSZWNlaXB0c19OYXZpZ2F0aW9uX1JlYWQiLCJTZXBhTWFuZGF0ZXNfQ3VzdG9tZXJTdXBwb3J0X1dyaXRlIiwiQnJhbmRzaG9wX05hdmlnYXRpb25fUmVhZCIsIkNhcnJpZXJBbmRSZXR1cm5fTmF2aWdhdGlvbl9SZWFkIiwiUGFydG5lcl9OYXZpZ2F0aW9uX1JlYWQiLCJTZXJ2aWNlc19OYXZpZ2F0aW9uX1JlYWQiLCJBbmFseXRpY3NfTmF2aWdhdGlvbl9SZWFkIiwiUHJvZHVjdHNfTmF2aWdhdGlvbl9SZWFkIl19LCJuYW1lIjoiVGVzdCBVc2VyIiwicHJlZmVycmVkX3VzZXJuYW1lIjoiYXBpX3Rlc3QiLCJsb2NhbGUiOiJkZSIsImdpdmVuX25hbWUiOiJUZXN0IiwiZmFtaWx5X25hbWUiOiJVc2VyIiwiZW1haWwiOiJhbmRyZS5lcmtAb3R0by5kZSJ9.Rszr6jXUUGGHzqw2XVo7HcaZ0pHvwYyJdg0olZEwpkz2lNBPejFPDuHK5eUrKEBxOhAsu3zKXwrfcyMWW8iufAbfCEonlDjle7U3NafLT-ITcjiL0wf1oI0D33h37RKmd0KjBXcoZRyvGZEUoItMp1WNGLn0JV8UvSOqDiGeCHvuurLNb91aIIHNMuN8lRQLaOhCKRmKsnxpUOytNcOER0_Z_sbK3x4fWJuaEDLIf6OGmx6TXZQr5e2UnvtOIWpt_JMvnKoJOC2-cPN5MP-PiMKTodi7ajhavUxo7dWyE0eBvc2stMFhjwSJO1KUkGjHdk0PWt-4GNlAdBze3laR2Q\",   \"expires_in\": 1800,   \"refresh_expires_in\": 7200,   \"refresh_token\": \"eyJhbGciOiJIUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICI5YjRjZjM1Yi0yZDBkLTQzZGUtYWVjMC1kZTUzMDNiYjM3YjEifQ.eyJqdGkiOiI2NDI0ZTg5OC0yMTBkLTRhZGYtYWNhOS1hZmI1YjA4NTU0NDMiLCJleHAiOjE1ODQ5OTIzNjQsIm5iZiI6MCwiaWF0IjoxNTg0OTg1MTY0LCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvb3R0by1wYXJ0bmVyIiwiYXVkIjoiaHR0cHM6Ly9lc2Itd3Mub3R0by5kZS9zZWMtYXBpL2F1dGgvcmVhbG1zL290dG8tcGFydG5lciIsInN1YiI6Ijg5MGJmZGIxLTEyZGUtNDk2NC1iZjM4LWFkNTcxMjk3ODY1OCIsInR5cCI6IlJlZnJlc2giLCJhenAiOiJ0b2tlbi1vdHRvLWFwaSIsImF1dGhfdGltZSI6MCwic2Vzc2lvbl9zdGF0ZSI6IjNlMDcxMGIyLWI1N2EtNGNiMC1hNTFkLTZkZTYwYTk5NzM1NiIsInNjb3BlIjoicHVtYmEtcm9sZXMtYXBwLXBvcnRhbCBwYXJ0bmVyIGVtYWlsIHByb2ZpbGUifQ.X02NuyvlIhGL6L6fDGvdW-NSLCpFFIc4Cf8XbA_bBdk\",   \"token_type\": \"bearer\",   \"not-before-policy\": 0,   \"session_state\": \"3e0710b2-b57a-4cb0-a51d-6de60a997356\",   \"scope\": \"pumba-roles-app-portal partner email profile\" } ```  ### Use refresh token The refresh token can be extracted from the <code class=\"inline\">refresh_token</code> value. Once the access token is expired you can use the refresh token to get a new access token, without using your users credentials again. You can use the following cURL command. Include the refresh token (without leading and trailing < >). ``` curl -X POST \\   https://api.otto.market/v1/token \\   -H 'Content-Type: application/x-www-form-urlencoded' \\   -H 'cache-control: no-cache' \\   -d 'refresh_token=<refresh_token>&grant_type=refresh_token&client_id=token-otto-api' ```  The reponse of this request will look like the example above, the access token can be extracted from <code class=\"inline\">access_token</code> and the new refresh token from <code class=\"inline\">refresh_token</code>.  ### Use access token  When you decode the access token you will see information including your email, name and roles as well as usual token metadata:  ``` {   \"jti\": \"b76250a9-a69f-45fe-9191-d42c68da051e\",   \"exp\": 1584988534,   \"nbf\": 0,   \"iat\": 1584984934,   \"iss\": \"https://esb-ws.otto.de/sec-api/auth/realms/otto-partner\",   \"sub\": \"790bfdb1-12de-4964-bf38-ad5712978658\",   \"typ\": \"Bearer\",   \"azp\": \"token-otto-api\",   \"auth_time\": 0,   \"session_state\": \"81476119-17a4-414b-a4da-aec6f737ddf4\",   \"acr\": \"1\",   \"scope\": \"openid pumba-roles-app-portal partner email profile\",   \"email_verified\": true,   \"partner_id\": \"1000000\",   \"realm_access\": {     \"roles\": [       \"Products_Read\",       ...     ]   },   \"name\": \"Example User\",   \"preferred_username\": \"api_example\",   \"given_name\": \"Example\",   \"family_name\": \"User\",   \"email\": \"example.user@example.org\" } ```  ## Calling an Endpoint All endpoints are secured via authorization. You add the HTTP <code class=\"inline\">Authorization</code> -Header with value <code class=\"inline\">Bearer ey...</code> and will get access. ``` curl -X GET \\   https://api.otto.market/v2/orders \\   -H 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5jdhstdheSldUIiwia2lkIiA6ICI4T1d6MjhuZ01GbHBURDl5TGtxQkRHMThuYXZNVFgyTWtqNVhkY0RITDBZIn0.eyJqdGkiOiI5OTM1NDk3OS1iNDdhLTQ3MzctOWYyMy0yNTMyMmI5MGVmYmMiLCJleHAiOjE1NTM3NjQ4NjMsIm5iZiI6MCwiaWF0IjoxNTUzNzYxMjYzLCJpc3MiOiJodHRwczovL2VzYi13cy5vdHRvLmRlL3NlYy1hcGkvYXV0aC9yZWFsbXMvcGFydG5lci1hcGktdGVzdCIsImF1ZCI6ImFjY291bnQiLCJzdWIiOiI0MWUwNGQ1OS0xMTk0LTRiYjMtODhkYS1hYjRmNTk2NDkwZGUiLCJ0eXAiOiJCZWFyZXIiLCJhenAiOiJwYXJ0bmVyLWFwaSIsImF1dGhfdGltZSI6MCwic2Vzc2lvbl9zdGF0ZSI6IjliNjk1ZDA1LTY5YzQtNDkwZS1hZGIzLTc2YWE5NmJmZjA0YyIsImFjciI6IjEiLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsib2ZmbGluZV9hY2Nlc3MiLCJ1bWFfYXV0aG9yaXphdGlvbiJdfSwicmVzb3VyY2VfYWNjZXNzIjp7ImFjY291bnQiOnsicm9sZXMiOlsibWFuYWdlLWFjY291bnQiLCJtYW5hZ2UtYWNjb3VudC1saW5rcyIsInZpZXctcHJvZmlsZSJdfX0sInNjb3BlIjoiZW1haWwgcHJvZmlsZSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJwYXJ0bmVyIjoiMTAwMDYyNCIsIm5hbWUiOiJTb3VsZXdheSIsInByZWZlcnJlZF91c2VybmFtZSI6IjEwMDA2MjQiLCJnaXZlbl9uYW1lIjoiU291bGV3YXkifQ.SleUexNdapaY5RmrVTbKRMiVpRrbNLjIUi7fILsW1hkpqQbX4IQRaSufSt98Ar0OkEmIvZvYPpGVecmjwYvD3YQzBmlcdU0V544Y0h8y01RyxZAYGZbRXfA1kOsFDucnrClCcj1JIaQMU4629wU9OM_SdQaLvfTA2l5prma94RekdWR3S-6DzXqJDtHrrcYS8BsfohkuLdi1U8vPUjwee9lsY3RTa9YZVekH4hFVWMl0Pbwub8jwum6zRjTu-ZAiLhZSnl8mSaMtrJFmkzRi3-s9eN7k0lnLKWGt7JuqZ_vbiJT8ZhHvPur4eLrY02ehF6-lwSUyjWMCzCi5TjBgYg' ```  The expected result has an HTTP 200 code with a probably empty list.  ## Rate Limiting In general requests are limited to 20 requests per second per partner-id as received inside the header. Exceeding the rate limit results in a HTTP 429 \"too many requests\" error. For some endpoints the rate limit is lower to ensure the best quality for all API users. Please see below:  |Endpoint path|HTTP method|Max requests per time unit| |:-|:-|:-| |/products|GET|10 per second| |/products|POST|20 per second| |/products/active-status|GET|10 per second| |/products/active-status|POST|3600 per day| |/products/marketplace-status|GET|10 per second| |/products/categories|GET|10 per second| |/products/brands|GET|10 per second|   ### Need A high volume of calls on API services at any given time would increase server resource consumption. If the load is due to an unauthorized intrusion it would be a chaos. Thus, Rate limiting becomes extremely important.  ### User Based API Throttling A general method of limiting usage of API resource is to allocate a pre-configured static or dynamic quota for a consumer.The API rate limiting is done on the basis of partner-id. A particular partner-id can make 20 requests per second.  ### Best practice Don't batch-process if possible (when every partner processes data once every hour, we have a clogged system once every hour and nothing to do the reset of the time).  ## Timeouts and Defaults | Name            | Value | Description                                                                                                    | |-----------------|-------|----------------------------------------------------------------------------------------------------------------| | request timeout | 10s   | The maximum HTTP request timeout for all interfaces                                                            | | limit           | 128   | The default for limit query parameter. See Paging. The default limit can be overwritten in specific interfaces.|  ## Common Patterns ### Interface Definition Our REST interface definitions are basically using swagger.io. All interface definitions can be automatically used by you to generate necessary API objects and similar in your chosen implementation language. In order to remain technically extensible and up-to-date, individual interfaces may have been described in new or different definition schemes. We are constantly trying to keep all interfaces technically up to date.  ### Versioning The OTTO Partner API uses different versions for the single endpoints. The version number is included in the URL path. [Semantic versioning](https://semver.org/) scheme is used, but only the major version. Breaking changes are only introduced in new major versions. API version is required in all urls.  Endpoints may introduce new optional fields at any time in the request and any new fields in the response. The client must skip all unknown fields.  For every endpoint, a changelog exists which displays the latest released changes and the upcoming unreleased changes. Additionally, an overall [Changelog](/) exists with the most exciting changes about the API in general. ### Supporting old versions The OTTO Partner API continues to support old versions of an API for **6 months** from the time of public announcement for the new version of a given API. It is recommanded to check regularly. This can be be automated by checking HTTP headers.  __example:__ ``` Warning: v2 is deprecated. Please migrate to v3 Sunset: Sun, 01 Nov 2020 00:00:00 GMT Deprecation: Wed, 11 Nov 2018 23:59:59 GMT Link: <https://api.otto.market/v3/orders>; rel=\"successor-version\" ```  ## Header Some common headers should be set by clients:  1. Set the <code class=\"inline\">X-Request-Timestamp</code> header according to the [ISO-8601](https://tools.ietf.org/html/rfc3339#section-5.6) standard. You can use this regex pattern: <code class=\"inline\">^\\d{4}-(0\\d|1[0-2])-([0-2]\\d|3[01])T(2[0-3]|[01]\\d):[0-5]\\d:[0-5]\\d(\\.\\d+)?([+-](2[0-3]|[01]\\d):[0-5]\\d|Z)$</code> 2. Set <code class=\"inline\">Accept</code> to the desired response format e.g. <code class=\"inline\">application/json</code> 3. Set the <code class=\"inline\">Content-Type</code> header to define the used format in the request body, only applicable if you send a request body  ### HTTP Methods The interfaces describe which HTTP methods are allowed and how to use them. Our basic concern is that basically all HTTP Methods are allowed in the [standardized way](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol). Note that these methods should behave as specified by their [standardized meaning (idempotency)](http://restcookbook.com/HTTP%20Methods/idempotency/). The following is a description of a few special features, relevant facts or ways to use some of the HTTP methods. <details>   <summary>Click to expand for details</summary>  ### POST POST will update specific fields **and** returns the result like a GET would do (error response is independent).  ### PUT PUT will create or replace the whole entity independent of an existing entity.  ### PATCH PATCH will update specific fields **and** not return data like a GET would do (error response is independent). PATCH body is structured in the same way as PUT and POST (entity body). All fields added into your body will be updated, other fields will not be affected.  __example:__ ``` {   \"username\" : \"myusername\",   \"email\" : null } ``` </details> ## HTTP Status Codes We are using [standardized HTTP status code](https://www.restapitutorial.com/httpstatuscodes.html) with a body only if needed (it also just can be empty), but details about that you can find at the concrete interface implementation.  | Verb   | Description  | |--------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | HEAD   | Can be issued against any resource to get just the HTTP header info.                                                                                                                                                                                                                                   | | GET    | Used for retrieving resources.                                                                                                                                                                                                                                                                         | | POST   | Used for creating resources.                                                                                                                                                                                                                                                                           | | PATCH  | Used for updating resources with partial JSON data. For instance, an Issue resource has title and body attributes. A PATCH request may accept one or more of the attributes to update the resource. PATCH is a relatively new and uncommon HTTP verb, so resource endpoints also accept POST requests. | | PUT    | Used for replacing resources or collections. For PUT requests with no body attribute, be sure to set the Content-Length header to zero.                                                                                                                                                                 | | DELETE | Used for deleting resources.                                                                                                           |  ## Error Message Style Error messages are returned as content type \"application/json;charset=utf-8\" in the following format: ``` {   \"errors\": [     {       \"path\": \"/orders/1000331\",       \"title\":  \"Invalid Attribute\",       \"code\": \"490\",       \"detail\": \"First name must contain at least three characters.\",       \"detail-structured\": {...},       \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/firstname\",       \"logref\": \"key to find in the log\"     }   ],   \"warnings\": [       {         \"path\": \"/orders/1000331\",         \"title\":  \"Warning Attribute\",         \"code\": \"WRONG_SPELLING\",         \"detail\": \"Last name should start with big letter.\",         \"detail-structured\": {...},         \"jsonpath\": \"[@.orderid=='12345']/invoiceAddress/lastname\",         \"logref\": \"key to find in the log\"       }     ] } ```  Field             | Mandatory | Description ----------------- | --------- | ----------- path              | yes       | called REST path title             | yes       | short description of the error code              | no        | internal error code (number or enum) of your application / domain (do not use the HTTP status codes) detail            | no        | long description of the error, perhaps technical details detail-structured | no        | technical details in JSON structure jsonpath          | no        | JSON field in request which caused the error logref            | no        | reference key to find more stuff in the log (as example traceId)  ## Pagination All interfaces return a list with resources (orders, shipments...) and a next link if more entries exist. Use the next link to retrieve more entries.  For pagination, the basic query parameter \"limit\" (e.g. <code class=\"inline\">?limit=10</code>) can be used to define the maximum amount of resulting entities returned per call. The interface itself can reduce the limit lower than your client limit.  An example entity would be: ``` {   resources: [     {       ...data of the entity if all or some information will be provided directly...,       links: [         {           href: \"/v1/orders/1234\",  <--- Link to single partner order           rel: \"self\"         }       ]     }   ],   links: [     {       href: \"/v1/orders?idGt=1234\", <--- Link to next list of ressources. If not present, no more records exist, currently       rel: \"next\"     }   ] } ```  ## Bulk requests If you send a bulk request for an API endpoint, it will be processed asynchronously at the backend.  ### Synchronous Answer Synchronously will be delivered an endpoint to check the asynchronous processing state. ``` HTTP STATUS 202 (Accepted) {     \"task\": {         \"href\": \"/interface/foo/123\",         \"id\": \"123\"     } } ```  ### Check the State of an Endpoint The client can follow the <code class=\"inline\">href</code> to check the state of processing. An example entity would be: ``` {   \"state\": \"pending\",   \"message\": \"is running boy\",   \"progress\": \"35\",   \"total\": \"100\",   \"pingAfter\": \"2019-05-01T13:25:12+0200\",   \"links\": [     {       \"rel\": \"self\",       \"href\": \"/foo/bar/123\"     },     {       \"rel\": \"failed\",       \"href\": \"/foo/bar/123/failed\"     },     {       \"rel\": \"succeeded\",       \"href\": \"/foo/bar/123/succeeded\"     }   ] } ```  ### Fetching files like PDF and CSV  Clients don't have to know the filetype that will be returned from a resource. Resources serving files will have the appropriate file extension in the URL as shown in the example below.  **Request Headers** ``` GET /SomeInvoice.pdf HTTP/1.1 Accept: *_/_* ```  Clients can find out the mime-type from the Content-Type header that will be sent in the response (e.g. application/pdf for PDF files and application/csv for CSV files).  **Response Headers**    ``` HTTP/1.1 200 OK Content-Length: 514493 Content-Type: application/pdf ```  ## Common fields Common fields like time, currency, country codes etc need to follow the standard ISO guidelines unless mentioned otherwise. The fields must report the format they are following on the docs.  ### Some standard formats: - Time: Accept in any time zone in ISO 8601 format and always reply in UTC.    Example: `YYYY-MM-DD` and `hh:mm:ss.sss`: `2020-03-12` and `22:33:34.400` - Currency: ISO 4217.    Example: `EUR` for Euros, `GBP` for British Pound Sterling. - Country code: ISO-3166-1 alpha-3    Example: `DEU` for Germany, `NOR` for Norway.  # Sandbox  ⚠️ we cannot provide the endpoint of quantities in the sandbox environment!  ## General **Sandbox is the test environment,** used for testing an API connection. It provides all the functionalities of the live OTTOmarket Interface. All actions and orders there are simulated for testing purposes.  The login session and the API key in the sandbox environment are completely separated from the production environment. You may [send us an e-mail](mailto:support@otto.market) to get an API key.  REST API: **https://sandbox.api.otto.market**  ## How-to Test Follow these steps to start testing on our sandbox environment:  1.  Make yourself familiar with sandbox functionalities. 1.  Request a sandbox API user from our team via [e-mail](mailto:support@otto.market). 1.  Authenticate to our sandbox environment. See [DevelopersGuide](/docs#section/Partner-API-Developer's-Guide) for further information. 1.  Use our Order generator to create fictional orders. See Technical Advice below to know, which orders are created. 1.  Test the API functionality of your application.  ## Products: Validation and test cases  ### Validation  Submitted product data is validated in two steps:  **1. Technical validation**  The first technical validation (syntax and required attributes) takes place after you´ve sent product data using a POST request. Read more about uploading products here: OTTO Market API: Create or update your product variations. If your http request was successful (http response state 200), you´ll be provided with four different links (pending, succeeded, failed, unchanged). Following the links you´ll be able to check which products have been successfully listed, failed, unchanged or are still being processed.  |Status|Explanation| |:-|:-| |Pending|The product listing is still being processed| |Succeeded|The shown products listing was successful| |Failed|Listing of all shown products has failed| |Unchanged|The request for the listed products is unchanged to the last request|  **2. Shop validation**  The second step is the shop validation. Results of the shop validation are retrievable using the marketplace-status endpoint. Please read OTTO Market API: Read the marketplace status on how to use the marketplace status endpoint. Submitted product data always has one of the following four marketplace statuses:  |Status |Explanation              | |:-------|:-------------------------| |Pending|Submitted product data is currently proceeded.| |Online|The SKU is displayed at otto.de. You can find the SKU using the shop link. <br />In some cases, additional information will be shown on how to improve the visibility on otto.de.| |Restricted|The SKU is not displayed at otto.de because of an error shown within the error’s container.| |Inactive|The SKU was set inactive via the active-status endpoint and could be reactivated via the active-status endpoint.|  **Attention:** Since the sandbox is missing a direct shop integration the second validation is simulated.  ### Test cases  To ensure you´re able to test every marketplace status including different errors we´ve added specific EAN´s to our sandbox environment. Below you´ll find predefined test cases to simulate possible cases from the live environment. As mentioned before the different states are retrievable fetching the marketplace status.  **Test case #1: Status Online with poor data quality:**  A product status can be online but still have poor data quality. To increase the visibility please add the listed attributes from the error message (“{0}”).  This state can be tested by listing SKU´s using one or more of the following EAN´s:  - “6250000000010” - “6250000000027” - “6250000000034” - “6250000000041” - “6250000000058”  You should receive an error message that looks anything like this:  800001 - DATAQUALITY_NOTICE_SIGNIFICANT_ATTRIBUTE_AND_INFORMATION: “Durch die Pflege folgender Attribute kann die Sichtbarkeit des Produktes gesteigert werden: ''{0}''”  **Test case #2: Status Restricted – Brand blocked**  Some brands are reserved for specific sellers. By listing a product with one of those reserved brands you should receive the following error message:  600007- BRAND_BLOCKED and error title: “Die Marke ist gesperrt und darf nicht eingespielt werden.“ This state can be tested by listing SKU´s using one or more of the following EAN´s:  - “6250000000065” - “6250000000072” - “6250000000089” - “6250000000096” - “6250000000102”  **Test case #3: Status Restricted – EAN already known**  To ensure a great customer experience, product listings using the same EAN are grouped on the OTTO market. This leads to seller competition. By listing a product with a yet unknown EAN a new moin will be generated and must be included in all future updates / listings for that EAN. The moin is retrievable via the marketplace status.  By listing a product with an already known EAN you´ll be prompted with the following error message:  700001 - MOIN_ALREADY_KNOWN and the error title: “Diese Variante ist auf dem OTTO Marktplatz bereits bekannt. Um die Variante zum Verkauf anbieten zu können, bestätigen Sie uns bitte den Content, indem sie die MOIN beim nächsten Update an uns zurückschicken.“  The error message says that the EAN is already known and can only be sold by including the moin. The moin is retrievable from the marketplace status. Including the moin means you´re agreeing that you´re selling the exact same product which has initially generated the moin for the EAN you´re trying to sell. If you disagree, please contact support@otto.market.  The listing of a product with an already known EAN is possible by listing SKU´s using one or more of the following EAN´s:  - “6250000000201” - “6250000000300” - “6250000000409” - “6250000000508” - “6250000000607” - “6250000000706” - “6250000000805” - “6250000000904” - “6250000001000”  **Test case #4: Status Restricted – MOIN incorrect**  It´s possible that you´re trying to submit a product including the moin but the moin has a typo / is wrong in general. You´ll receive the following error message then:  700002 – MOIN_INCORRECT and the error title: “Die von Ihnen zu dieser Variante übertragene MOIN entspricht nicht der von uns für diese Variante vergebenen MOIN. Bitte überprüfen Sie ihre Daten und korrigieren die MOIN entsprechend.“  This is solved by including the correct moin.   ## Technical Advice Please note the following information: ### Authorization For the endpoint like all the other endpoints a valid authorization token has to be sent. If you need further information, please consult the [Developers Guide](/docs#section/Partner-API-Developer's-Guide).  ### GET-Returns Endpoint Since there are no real costumers, returns cannot be announced. Hence, the GET endpoint of returns is retrieving an empty string.  ### Sandbox Reset To prevent data overload, our sandbox and its orders are resetted monthly at first Sunday from 6 p.m. to 10 p.m.\\ Any dynamic data (shipments, returns) is deleted. Old shipments will not be available anymore.\\ Therefore, you have to create new Orders every month.  ### Order Generator To test your API implementation you can generate test orders only on the sandbox environment by sending an empty POST request to the following generation endpoint:  [https://sandbox.api.otto.market/v4/orders/testorders]()  This will run 8 predefined scenarios on our sandbox. After the POST request, you will receive 6 orders in \"PROCESSABLE\" status with different combinations of positions and items (e.g. standard and freight delivery). You will also receive 1 prepayment orders in \"ANNOUNCED\" and 1 orders in \"CANCELLED_BY_MARKETPLACE\" status.  The generated orders will contain one or more position items with the following products:  | Product Title                       | EAN           | SKU                   | |-------------------------------------|---------------|-----------------------| | Smartphone »CallMe 1000«            | 1245780164732 | SmartCM1000-schwarz-1 | | Fancy Shirt »Flower«                | 4851278936452 | FancyFlower-m-pi      | | Rasenmaeher »Turbo V1«              | 9821393948573 | 0440-Rasen-T-V1       | | Spedition Wohnlandschaft 3.tlg.     | 8263748321943 | Sped-Wohn-3-98735     | | Spedition Kühlschrank »COOL EXTREM« | 7263000981290 | Sped-Kühl084-kombi    |  Scenarios:  | Scenarios        | Status                   | Comment                                                                | |------------------|--------------------------|------------------------------------------------------------------------| | 1, 2, 3, 4, 7, 8 | PROCESSABLE              | Scenario 4 inclusive discount                                                                       | | 5                | ANNOUNCED                | Prepayment Order which is announced (Customer has not paid yet)        | | 6                | CANCELLED_BY_MARKETPLACE | Prepayment Order which has been cancelled, because customer didn’t pay |  Please use the generated orders to test the interaction with Orders, Shipments and Returns.  If you want to create a single scenario you can do that by sending an empty POST to:  [https://sandbox.api.otto.market/v4/orders/testorders/scenario\\{scenarionumber\\}]()  e.g. [https://sandbox.api.otto.market/v4/orders/testorders/scenario1]()
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Otto\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Otto\Client\ApiException;
use Otto\Client\Configuration;
use Otto\Client\HeaderSelector;
use Otto\Client\ObjectSerializer;

/**
 * OrdersV4Api Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersV4Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation ordersV4CancelPartnerOrderPositionItems
     *
     * Cancel specific position items of an order
     *
     * @param  string $sales_order_id The salesOrderId of the order (required)
     * @param  string[] $position_item_id The positionItemIds of the order to cancel (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function ordersV4CancelPartnerOrderPositionItems($sales_order_id, $position_item_id)
    {
        $this->ordersV4CancelPartnerOrderPositionItemsWithHttpInfo($sales_order_id, $position_item_id);
    }

    /**
     * Operation ordersV4CancelPartnerOrderPositionItemsWithHttpInfo
     *
     * Cancel specific position items of an order
     *
     * @param  string $sales_order_id The salesOrderId of the order (required)
     * @param  string[] $position_item_id The positionItemIds of the order to cancel (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersV4CancelPartnerOrderPositionItemsWithHttpInfo($sales_order_id, $position_item_id)
    {
        $returnType = '';
        $request = $this->ordersV4CancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation ordersV4CancelPartnerOrderPositionItemsAsync
     *
     * Cancel specific position items of an order
     *
     * @param  string $sales_order_id The salesOrderId of the order (required)
     * @param  string[] $position_item_id The positionItemIds of the order to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4CancelPartnerOrderPositionItemsAsync($sales_order_id, $position_item_id)
    {
        return $this->ordersV4CancelPartnerOrderPositionItemsAsyncWithHttpInfo($sales_order_id, $position_item_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ordersV4CancelPartnerOrderPositionItemsAsyncWithHttpInfo
     *
     * Cancel specific position items of an order
     *
     * @param  string $sales_order_id The salesOrderId of the order (required)
     * @param  string[] $position_item_id The positionItemIds of the order to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4CancelPartnerOrderPositionItemsAsyncWithHttpInfo($sales_order_id, $position_item_id)
    {
        $returnType = '';
        $request = $this->ordersV4CancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ordersV4CancelPartnerOrderPositionItems'
     *
     * @param  string $sales_order_id The salesOrderId of the order (required)
     * @param  string[] $position_item_id The positionItemIds of the order to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ordersV4CancelPartnerOrderPositionItemsRequest($sales_order_id, $position_item_id)
    {
        // verify the required parameter 'sales_order_id' is set
        if ($sales_order_id === null || (is_array($sales_order_id) && count($sales_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id when calling ordersV4CancelPartnerOrderPositionItems'
            );
        }
        // verify the required parameter 'position_item_id' is set
        if ($position_item_id === null || (is_array($position_item_id) && count($position_item_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $position_item_id when calling ordersV4CancelPartnerOrderPositionItems'
            );
        }

        $resourcePath = '/v4/orders/{salesOrderId}/positionItems/{positionItemId}/cancellation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sales_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'salesOrderId' . '}',
                ObjectSerializer::toPathValue($sales_order_id),
                $resourcePath
            );
        }
        // path params
        if ($position_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'positionItemId' . '}',
                ObjectSerializer::toPathValue($position_item_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation ordersV4CancelPartnerOrders
     *
     * Cancel all position items of an order
     *
     * @param  string[] $sales_order_id The salesOrderIds of the orders to cancel (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function ordersV4CancelPartnerOrders($sales_order_id)
    {
        $this->ordersV4CancelPartnerOrdersWithHttpInfo($sales_order_id);
    }

    /**
     * Operation ordersV4CancelPartnerOrdersWithHttpInfo
     *
     * Cancel all position items of an order
     *
     * @param  string[] $sales_order_id The salesOrderIds of the orders to cancel (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersV4CancelPartnerOrdersWithHttpInfo($sales_order_id)
    {
        $returnType = '';
        $request = $this->ordersV4CancelPartnerOrdersRequest($sales_order_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation ordersV4CancelPartnerOrdersAsync
     *
     * Cancel all position items of an order
     *
     * @param  string[] $sales_order_id The salesOrderIds of the orders to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4CancelPartnerOrdersAsync($sales_order_id)
    {
        return $this->ordersV4CancelPartnerOrdersAsyncWithHttpInfo($sales_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ordersV4CancelPartnerOrdersAsyncWithHttpInfo
     *
     * Cancel all position items of an order
     *
     * @param  string[] $sales_order_id The salesOrderIds of the orders to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4CancelPartnerOrdersAsyncWithHttpInfo($sales_order_id)
    {
        $returnType = '';
        $request = $this->ordersV4CancelPartnerOrdersRequest($sales_order_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ordersV4CancelPartnerOrders'
     *
     * @param  string[] $sales_order_id The salesOrderIds of the orders to cancel (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ordersV4CancelPartnerOrdersRequest($sales_order_id)
    {
        // verify the required parameter 'sales_order_id' is set
        if ($sales_order_id === null || (is_array($sales_order_id) && count($sales_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id when calling ordersV4CancelPartnerOrders'
            );
        }

        $resourcePath = '/v4/orders/{salesOrderId}/cancellation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sales_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'salesOrderId' . '}',
                ObjectSerializer::toPathValue($sales_order_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation ordersV4FindPartnerOrders
     *
     * List of orders filtered by fulfillment state
     *
     * @param  string $from_date Defines earliest change date (ISO 8601) the returned orders should have (optional)
     * @param  string $from_order_date Only orders newer than the date specified (ISO 8601) will be returned (optional)
     * @param  string $to_order_date Only orders older than the date specified (ISO 8601) will be returned (optional)
     * @param  string $fulfillment_status &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE (optional)
     * @param  int $limit The maximum amount of orders to return (optional, default to 128)
     * @param  string $order_direction Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order (optional, default to ASC)
     * @param  string $order_column_type The column on which to apply &#x27;orderDirection&#x27; parameter (optional, default to ORDER_LIFECYCLE_DATE)
     * @param  string $mode In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned (optional, default to BUCKET)
     * @param  string $nextcursor Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link (optional)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Otto\Client\Model\PartnerOrderListOrdersV4
     */
    public function ordersV4FindPartnerOrders($from_date = null, $from_order_date = null, $to_order_date = null, $fulfillment_status = null, $limit = '128', $order_direction = 'ASC', $order_column_type = 'ORDER_LIFECYCLE_DATE', $mode = 'BUCKET', $nextcursor = null)
    {
        list($response) = $this->ordersV4FindPartnerOrdersWithHttpInfo($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor);
        return $response;
    }

    /**
     * Operation ordersV4FindPartnerOrdersWithHttpInfo
     *
     * List of orders filtered by fulfillment state
     *
     * @param  string $from_date Defines earliest change date (ISO 8601) the returned orders should have (optional)
     * @param  string $from_order_date Only orders newer than the date specified (ISO 8601) will be returned (optional)
     * @param  string $to_order_date Only orders older than the date specified (ISO 8601) will be returned (optional)
     * @param  string $fulfillment_status &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE (optional)
     * @param  int $limit The maximum amount of orders to return (optional, default to 128)
     * @param  string $order_direction Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order (optional, default to ASC)
     * @param  string $order_column_type The column on which to apply &#x27;orderDirection&#x27; parameter (optional, default to ORDER_LIFECYCLE_DATE)
     * @param  string $mode In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned (optional, default to BUCKET)
     * @param  string $nextcursor Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link (optional)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Otto\Client\Model\PartnerOrderListOrdersV4, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersV4FindPartnerOrdersWithHttpInfo($from_date = null, $from_order_date = null, $to_order_date = null, $fulfillment_status = null, $limit = '128', $order_direction = 'ASC', $order_column_type = 'ORDER_LIFECYCLE_DATE', $mode = 'BUCKET', $nextcursor = null)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderListOrdersV4';
        $request = $this->ordersV4FindPartnerOrdersRequest($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Otto\Client\Model\PartnerOrderListOrdersV4',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ordersV4FindPartnerOrdersAsync
     *
     * List of orders filtered by fulfillment state
     *
     * @param  string $from_date Defines earliest change date (ISO 8601) the returned orders should have (optional)
     * @param  string $from_order_date Only orders newer than the date specified (ISO 8601) will be returned (optional)
     * @param  string $to_order_date Only orders older than the date specified (ISO 8601) will be returned (optional)
     * @param  string $fulfillment_status &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE (optional)
     * @param  int $limit The maximum amount of orders to return (optional, default to 128)
     * @param  string $order_direction Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order (optional, default to ASC)
     * @param  string $order_column_type The column on which to apply &#x27;orderDirection&#x27; parameter (optional, default to ORDER_LIFECYCLE_DATE)
     * @param  string $mode In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned (optional, default to BUCKET)
     * @param  string $nextcursor Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4FindPartnerOrdersAsync($from_date = null, $from_order_date = null, $to_order_date = null, $fulfillment_status = null, $limit = '128', $order_direction = 'ASC', $order_column_type = 'ORDER_LIFECYCLE_DATE', $mode = 'BUCKET', $nextcursor = null)
    {
        return $this->ordersV4FindPartnerOrdersAsyncWithHttpInfo($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ordersV4FindPartnerOrdersAsyncWithHttpInfo
     *
     * List of orders filtered by fulfillment state
     *
     * @param  string $from_date Defines earliest change date (ISO 8601) the returned orders should have (optional)
     * @param  string $from_order_date Only orders newer than the date specified (ISO 8601) will be returned (optional)
     * @param  string $to_order_date Only orders older than the date specified (ISO 8601) will be returned (optional)
     * @param  string $fulfillment_status &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE (optional)
     * @param  int $limit The maximum amount of orders to return (optional, default to 128)
     * @param  string $order_direction Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order (optional, default to ASC)
     * @param  string $order_column_type The column on which to apply &#x27;orderDirection&#x27; parameter (optional, default to ORDER_LIFECYCLE_DATE)
     * @param  string $mode In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned (optional, default to BUCKET)
     * @param  string $nextcursor Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4FindPartnerOrdersAsyncWithHttpInfo($from_date = null, $from_order_date = null, $to_order_date = null, $fulfillment_status = null, $limit = '128', $order_direction = 'ASC', $order_column_type = 'ORDER_LIFECYCLE_DATE', $mode = 'BUCKET', $nextcursor = null)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderListOrdersV4';
        $request = $this->ordersV4FindPartnerOrdersRequest($from_date, $from_order_date, $to_order_date, $fulfillment_status, $limit, $order_direction, $order_column_type, $mode, $nextcursor);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ordersV4FindPartnerOrders'
     *
     * @param  string $from_date Defines earliest change date (ISO 8601) the returned orders should have (optional)
     * @param  string $from_order_date Only orders newer than the date specified (ISO 8601) will be returned (optional)
     * @param  string $to_order_date Only orders older than the date specified (ISO 8601) will be returned (optional)
     * @param  string $fulfillment_status &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates. Also see parameter &#x27;mode&#x27;.&lt;br&gt;&lt;br&gt;Example: ?fulfillmentStatus&#x3D;PROCESSABLE&amp;fulfillmentStatus&#x3D;CANCELLED_BY_MARKETPLACE (optional)
     * @param  int $limit The maximum amount of orders to return (optional, default to 128)
     * @param  string $order_direction Sort result by &#x27;orderColumnType&#x27; in ASCending or DESCending order (optional, default to ASC)
     * @param  string $order_column_type The column on which to apply &#x27;orderDirection&#x27; parameter (optional, default to ORDER_LIFECYCLE_DATE)
     * @param  string $mode In search mode AT_LEAST_ONE orders with at least one  position item in given &#x27;fulfillmentStatus&#x27; will always be returned (optional, default to BUCKET)
     * @param  string $nextcursor Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#x27;limit&#x27;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ordersV4FindPartnerOrdersRequest($from_date = null, $from_order_date = null, $to_order_date = null, $fulfillment_status = null, $limit = '128', $order_direction = 'ASC', $order_column_type = 'ORDER_LIFECYCLE_DATE', $mode = 'BUCKET', $nextcursor = null)
    {

        $resourcePath = '/v4/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($from_date !== null) {
            $queryParams['fromDate'] = ObjectSerializer::toQueryValue($from_date, null);
        }
        // query params
        if ($from_order_date !== null) {
            $queryParams['fromOrderDate'] = ObjectSerializer::toQueryValue($from_order_date, null);
        }
        // query params
        if ($to_order_date !== null) {
            $queryParams['toOrderDate'] = ObjectSerializer::toQueryValue($to_order_date, null);
        }
        // query params
        if ($fulfillment_status !== null) {
            $queryParams['fulfillmentStatus'] = ObjectSerializer::toQueryValue($fulfillment_status, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, 'int32');
        }
        // query params
        if ($order_direction !== null) {
            $queryParams['orderDirection'] = ObjectSerializer::toQueryValue($order_direction, null);
        }
        // query params
        if ($order_column_type !== null) {
            $queryParams['orderColumnType'] = ObjectSerializer::toQueryValue($order_column_type, null);
        }
        // query params
        if ($mode !== null) {
            $queryParams['mode'] = ObjectSerializer::toQueryValue($mode, null);
        }
        // query params
        if ($nextcursor !== null) {
            $queryParams['nextcursor'] = ObjectSerializer::toQueryValue($nextcursor, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation ordersV4GetPartnerOrderByOrderNumber
     *
     * Get an order via order number
     *
     * @param  string $order_number order_number (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Otto\Client\Model\PartnerOrderOrdersV4
     */
    public function ordersV4GetPartnerOrderByOrderNumber($order_number)
    {
        list($response) = $this->ordersV4GetPartnerOrderByOrderNumberWithHttpInfo($order_number);
        return $response;
    }

    /**
     * Operation ordersV4GetPartnerOrderByOrderNumberWithHttpInfo
     *
     * Get an order via order number
     *
     * @param  string $order_number (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Otto\Client\Model\PartnerOrderOrdersV4, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersV4GetPartnerOrderByOrderNumberWithHttpInfo($order_number)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderOrdersV4';
        $request = $this->ordersV4GetPartnerOrderByOrderNumberRequest($order_number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Otto\Client\Model\PartnerOrderOrdersV4',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ordersV4GetPartnerOrderByOrderNumberAsync
     *
     * Get an order via order number
     *
     * @param  string $order_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4GetPartnerOrderByOrderNumberAsync($order_number)
    {
        return $this->ordersV4GetPartnerOrderByOrderNumberAsyncWithHttpInfo($order_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ordersV4GetPartnerOrderByOrderNumberAsyncWithHttpInfo
     *
     * Get an order via order number
     *
     * @param  string $order_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4GetPartnerOrderByOrderNumberAsyncWithHttpInfo($order_number)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderOrdersV4';
        $request = $this->ordersV4GetPartnerOrderByOrderNumberRequest($order_number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ordersV4GetPartnerOrderByOrderNumber'
     *
     * @param  string $order_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ordersV4GetPartnerOrderByOrderNumberRequest($order_number)
    {
        // verify the required parameter 'order_number' is set
        if ($order_number === null || (is_array($order_number) && count($order_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_number when calling ordersV4GetPartnerOrderByOrderNumber'
            );
        }

        $resourcePath = '/v4/orders/{orderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'orderNumber' . '}',
                ObjectSerializer::toPathValue($order_number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation ordersV4GetPartnerOrderBySalesOrderId
     *
     * Get an order via sales order id
     *
     * @param  string $sales_order_id sales_order_id (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Otto\Client\Model\PartnerOrderOrdersV4
     */
    public function ordersV4GetPartnerOrderBySalesOrderId($sales_order_id)
    {
        list($response) = $this->ordersV4GetPartnerOrderBySalesOrderIdWithHttpInfo($sales_order_id);
        return $response;
    }

    /**
     * Operation ordersV4GetPartnerOrderBySalesOrderIdWithHttpInfo
     *
     * Get an order via sales order id
     *
     * @param  string $sales_order_id (required)
     *
     * @throws \Otto\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Otto\Client\Model\PartnerOrderOrdersV4, HTTP status code, HTTP response headers (array of strings)
     */
    public function ordersV4GetPartnerOrderBySalesOrderIdWithHttpInfo($sales_order_id)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderOrdersV4';
        $request = $this->ordersV4GetPartnerOrderBySalesOrderIdRequest($sales_order_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Otto\Client\Model\PartnerOrderOrdersV4',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation ordersV4GetPartnerOrderBySalesOrderIdAsync
     *
     * Get an order via sales order id
     *
     * @param  string $sales_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4GetPartnerOrderBySalesOrderIdAsync($sales_order_id)
    {
        return $this->ordersV4GetPartnerOrderBySalesOrderIdAsyncWithHttpInfo($sales_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation ordersV4GetPartnerOrderBySalesOrderIdAsyncWithHttpInfo
     *
     * Get an order via sales order id
     *
     * @param  string $sales_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function ordersV4GetPartnerOrderBySalesOrderIdAsyncWithHttpInfo($sales_order_id)
    {
        $returnType = '\Otto\Client\Model\PartnerOrderOrdersV4';
        $request = $this->ordersV4GetPartnerOrderBySalesOrderIdRequest($sales_order_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'ordersV4GetPartnerOrderBySalesOrderId'
     *
     * @param  string $sales_order_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function ordersV4GetPartnerOrderBySalesOrderIdRequest($sales_order_id)
    {
        // verify the required parameter 'sales_order_id' is set
        if ($sales_order_id === null || (is_array($sales_order_id) && count($sales_order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id when calling ordersV4GetPartnerOrderBySalesOrderId'
            );
        }

        $resourcePath = '/v4/orders/{salesOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($sales_order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'salesOrderId' . '}',
                ObjectSerializer::toPathValue($sales_order_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
