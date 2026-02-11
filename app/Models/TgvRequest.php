<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TgvRequest extends Model
{
    protected $table = 'tgv_requests';

    protected $fillable = [
        'service_type',
        'name',
        'prenom',
        'telephone',
        'email',
        'commentaire',
        'status',
        'admin_notes',
        'reviewed_at',
        'reviewed_by',
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Mutators pour nettoyer les données
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(strtolower(trim($value)));
    }

    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = ucfirst(strtolower(trim($value)));
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower(trim($value));
    }

    public function setTelephoneAttribute($value)
    {
        // Nettoyer le numéro de téléphone (supprimer les espaces, tirets, etc.)
        $this->attributes['telephone'] = preg_replace('/\D/', '', $value);
    }

    // Accessors
    public function getFullNameAttribute()
    {
        return "{$this->prenom} {$this->name}";
    }

    public function getFormattedPhoneAttribute()
    {
        $phone = $this->telephone;
        return substr($phone, 0, 2) . ' ' . substr($phone, 2, 2) . ' ' . substr($phone, 4, 2) . ' ' . substr($phone, 6);
    }

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => '<span class="badge bg-warning">En attente</span>',
            'accepted' => '<span class="badge bg-success">Acceptée</span>',
            'rejected' => '<span class="badge bg-danger">Refusée</span>',
            'archived' => '<span class="badge bg-secondary">Archivée</span>',
            default => '<span class="badge bg-light">Inconnu</span>',
        };
    }

    // Scopes pour les requêtes courantes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    public function scopeByServiceType($query, $serviceType)
    {
        return $query->where('service_type', $serviceType);
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}

