<?php

namespace App\Collection;

use Doctrine\Common\Collections\ArrayCollection;

class CommonNames extends ArrayCollection
{
    public function getAllNames()
    {
        return $this->getValues();
    }
}
