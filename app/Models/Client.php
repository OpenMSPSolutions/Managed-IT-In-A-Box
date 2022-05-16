<?php

namespace App\Models;

use App\Models\ClientLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'clients';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'team_id',
        'active',
        'name',
        'phone_number',
        'primary_user_id',
        'account_manager_user_id'
    ];

    public function locations()
    {
        return $this->hasMany(ClientLocation::class);
    }

    // public function contacts()
    // {
    //     return $this->hasMany(ClientLocation::class);
    // }
}
