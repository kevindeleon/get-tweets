get-tweets
==========

A PHP + JS solution for retrieving your most recent tweets to display on your website.

### Reason

I wrote this solution based on Twitter's blogger.js (https://twitter.com/javascripts/blogger.js). The JS files in my source borrow heavily from their logic. When Twitter released it's new V1.1 API and retired V1, it broke my site (and many others). I am mostly putting this on github to store for myself, but if it helps you out, great!

### What does it do?

You can use this combo of PHP + JS to grab your latest tweets. Depending on the parameters passed, you can include retweets and choose the number of tweets to display.

### Requirements

This solution requires the following which are not included in this repo:
* Webserver running PHP 5.3 or higher with PHP cURL and PHP OpenSSL enabled
* jQuery http://jquery.com/ (tested w/ v 1.7.2)
* codebird-php https://github.com/mynetx/codebird-php (tested w/ v 2.4.1)

### Installation + Usage

For a detailed tutorial on how to set things up, visit: http://kevin-deleon.com/2013/06/tutorial-display-recent-tweets-using-jquery-php-and-twitters-api/
