<?php namespace Hardywen\LaravelJpush;

use JPush\Model as M;
use JPush\JPushClient;

class LaravelJpush extends JPushClient{

    public function pushMsg($message){
        return $this->push()
            ->setPlatform(M\platform('android'))
            ->setAudience(M\all)
            ->setNotification(M\notification($message))
            ->send();
    }

}