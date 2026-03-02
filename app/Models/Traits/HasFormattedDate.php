<?php

namespace App\Models\Traits;

trait HasFormattedDate
{
    public function getCreatedAt()
    {
        setlocale(LC_TIME, "fr_FR");
        return strftime("%e %B %Y", strtotime($this->created_at));
    }
}
