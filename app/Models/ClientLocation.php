<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Chuckcms\Addresses\Traits\HasAddresses;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientLocation extends Model
{
    use HasFactory;
    use HasAddresses;

    /**
     * @var string $table
     */
    protected $table = 'client_locations';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'client_id',
        'name'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
