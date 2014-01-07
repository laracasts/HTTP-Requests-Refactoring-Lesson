<?php namespace Acme\Twitter;

use Guzzle\Plugin\Oauth\OauthPlugin;
use Guzzle\Service\Client;
use Illuminate\Support\ServiceProvider;
use Config;

class TwitterServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('twitter', function()
        {
            $client = new Client('https://api.twitter.com/1.1');
            $auth = new OauthPlugin([
                'consumer_key'    => Config::get('twitter.consumer_key'),
                'consumer_secret' => Config::get('twitter.consumer_secret'),
                'token'           => Config::get('twitter.token'),
                'token_secret'    => Config::get('twitter.token_secret')
            ]);

            $client->addSubscriber($auth);

            return new TwitterAPI($client);
        });
    }
}
