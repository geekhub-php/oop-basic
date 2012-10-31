<?php
namespace GeekHub\Basic;

class BasicStaticClass
{
    const PRIVACY_PRIVATE = 'private';
    const PRIVACY_FRIENDS = 'friends';
    const PRIVACY_PUBLIC  = 'public';

    protected static $privacySettings = array(
        self::PRIVACY_PRIVATE => 'Only you',
        self::PRIVACY_FRIENDS => 'You and your friends',
        self::PRIVACY_PUBLIC  => 'Everyone',
    );

    public static function getPrivacySettings()
    {
        return self::$privacySettings;
    }


    public static function getFirst($text)
    {
        return $text;
    }
}


