<?php

namespace Flyzard\Maileditor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model
{
    use HasFactory;

    protected $table = 'maileditor_mail_templates';

    protected $fillable = [
        'name',
        'subject',
        'slug',
        'content',
        'request',
        'envelope_id',
    ];

    protected $casts = [
        'request' => 'array',
    ];

    public function envelope()
    {
        return $this->belongsTo(Envelope::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
