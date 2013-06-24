<?php

/**
 * GetTweets - Used with Codebird-php to pull tweets from Twitter
 * https://github.com/kevindeleon/get-tweets
 *
 * @author Kevin deLeon <https://github.com/kevindeleon/>
 * @copyright 2013 Kevin deLeon <https://github.com/kevindeleon/>
 *
 * Licensed under the MIT license.
 * https://github.com/kevindeleon/get-tweets/blob/master/LICENSE
 */


/**
 * Class GetTweets
 */
class GetTweets {
	
	/**
	 * Gets most recent tweets
	 * @param String twitter username (ex. kevindeleon)
	 * @param String number of tweets
	 * @param String include retweets true, false
	 * @return JSON encoded tweets
	 */
	static public function get_most_recent($screen_name, $count, $retweets = NULL)
	{
		//let's include codebird, as it's going to be doing the oauth lifting for us
		require_once('codebird.php');
	
		//These are your keys/tokens/secrets provided by Twitter
		$CONSUMER_KEY = '<YOUR KEY>';
		$CONSUMER_SECRET = '<YOUR SECRET>';
		$ACCESS_TOKEN = '<YOUR TOKEN>';
		$ACCESS_TOKEN_SECRET = '<YOUR TOKEN SECRET>';
	
		//Get authenticated
		\Codebird\Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
		$cb = \Codebird\Codebird::getInstance();
		$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);
		//These are our params passed in
		$params = array(
			'screen_name' => $screen_name,
			'count' => $count,
			'rts' => $retweets,
		);
		
		//tweets returned by Twitter
	    $tweets = (array) $cb->statuses_userTimeline($params);
		
		//Let's encode it for our JS/jQuery to make sure and return it
		return json_encode($tweets);
	}

}