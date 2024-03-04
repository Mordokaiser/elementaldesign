<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens; // Asegúrate de importar HasApiTokens desde Laravel\Sanctum

class Users extends Authenticatable
{
    use HasFactory, HasApiTokens; // Asegúrate de usar HasApiTokens aquí

    protected $fillable = [
        'name',
        'email',
        'password',
        'client_id',
        'role_id',
        'created_at',
        'updated_at',
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function role()
    {
        return $this->belongsTo(Roles::class);
    }
}
