<?php

namespace tranlongpc\Activitylog\Test\Models;

use tranlongpc\Activitylog\Models\Activity;

class CustomActivityModel extends Activity
{
    public function getCustomPropertyAttribute()
    {
        return $this->changes();
    }
}
