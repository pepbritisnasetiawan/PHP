<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{

}

// error, karena class yang sudah final tidak bisa di extends
/* class FakeFacebook extends Facebook
{

} */

class Twitter extends SocialMedia
{
    public function login(string $username, string $password): bool
    {
        return true;
    }
}