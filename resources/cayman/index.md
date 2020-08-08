---
layout: default
title: "dsfs"
---


# Why to use this?


Often when creating opensource project directories we need to include a `license` file and this api will save you some time doing that.

Even though sites like GiHub have a GUI option to make a file for you, it is only provided at initialization and it requires extra steps just to include that single file to the directory.

This simple API scrapes the website [choosealicense.com](https://choosealicense.com/), and provides the output either as HTML or as plain text (default). 

Instead of hosting the content myself, I chose to scrape the site because they will be update-proof, without any need for updation.

# How to use it?

There are 2 output formats:
- Plain Text
- HTML

Plain text can be used to save to a file.

The HTML format can be used to add to websites, rendering perfectly in the browser.

This API can be used with either tools:
- [curl](https://curl.haxx.se/)
- [wget](https://www.gnu.org/software/wget/)
- [Postman](https://www.postman.com/)
- Web Browsers etc

# Usage

Allowed HTTPs methods:
- `GET` only

Description of usual server responses:
- 200`OK` : The request was successful .
- 400 `Bad Request` : The request could not be understood or was missing required parameters.
- 403 `Forbidden` : Access denied.
- 404 `Not Found` : Resource was not found.
- 405 `Method Not Allowed` : Requested method is not supported for resource.
- 500 `Internal Server Error` : Some problem on the server side, please [contact me](https://github.com/abhishekbalam/openlicensesapi/issues?q=is%3Aissue+is%3Aopen+sort%3Aupdated-desc) if you see this.


# API  Requests

They should be in the following format: 

```bash
GET openlicensesapi.herokuapp.com/{id}/{type}/
```

## URL Parameters

### - Required

- `id` : This is used to select which license to use

The following Licenses are available with their corresponding **ids** :

| ID | LICENSE                                                                     |         |
|:---|:----------------------------------------------------------------------------|:--------|
| 1  | [GNU AGPLv3](https://choosealicense.com/licenses/agpl-3.0/)                 | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 2  | [GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/)                   | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 3  | [GNU LGPLv3](https://choosealicense.com/licenses/lgpl-3.0/)                 | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 4  | [Mozilla Public License 2.0](https://choosealicense.com/licenses/mpl-2.0/)  | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 5  | [Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/)       | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 6  | [MIT License](https://choosealicense.com/licenses/mit/)                     | [Read](https://openlicensesapi.herokuapp.com/1/html)  |
| 7  | [The Unlicense](https://choosealicense.com/licenses/unlicense/)             | [Read](https://openlicensesapi.herokuapp.com/1/html)  |


### - Optional 

- `type` : This is an optional parameter used to determine the type of response needed which is either:

#### 1. Plain Text (Default)

```bash
GET openlicensesapi.herokuapp.com/{id}/
```

OR

```bash
GET openlicensesapi.herokuapp.com/{id}/text
```


#### 2. HTML 

```bash
GET openlicensesapi.herokuapp.com/{id}/html
```

# Usage with tools

### 1. Curl

Curl is a wonderful tool to get HTTP(s) responses and pipe it to STDOUT.

It can be used as follows:

```bash
$ curl openlicensesapi.herokuapp.com/{id}
```

### 2. Wget

Wget is a very useful CLI tool can be used to download the output into a file in the existing directory.

It can be used as follows:

```bash
$ wget openlicensesapi.herokuapp.com/{id} -O LICENSE
```
Here the `-O` flag outputs the response to a file named `LICENSE`

# Acknowledgement

Thanks to :
- S.C. Chen : Author of [Simple Html Parser in PHP](http://simplehtmldom.sourceforge.net/).
- GitHub Inc: The owner of [choosealicense.org](https://choosealicense.com/)
- Authors of the [Cayman](https://github.com/pages-themes/cayman) Jekyll Theme .
