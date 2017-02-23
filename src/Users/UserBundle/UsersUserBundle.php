<?php

namespace Users\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UsersUserBundle extends Bundle
{
    # ajouté après avoir fait le layout.html
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
