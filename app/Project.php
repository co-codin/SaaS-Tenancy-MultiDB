<?php

namespace App;

use App\File;
use App\Tenant\Traits\ForTenants;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use ForTenants;

    protected $fillable = [
        'name'
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
