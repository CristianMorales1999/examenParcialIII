<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    
    protected $fillable = [
        'nombres',
        'apellidos', 
        'email',
        'direccion',
        'telefono',
        'foto'
    ];

    /**
     * Get the client's full name
     */
    public function getNombreCompletoAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }

    /**
     * Get the client's photo URL or default avatar
     */
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        }
        
        // Return default avatar based on initials
        $initials = strtoupper(substr($this->nombres, 0, 1) . substr($this->apellidos, 0, 1));
        return "https://ui-avatars.com/api/?name=" . urlencode($this->nombre_completo) . "&color=7C3AED&background=DDD6FE&size=200";
    }

    /**
     * Check if client has a custom photo
     */
    public function hasCustomPhoto()
    {
        return !empty($this->foto);
    }
}
