<?php

namespace Flyzard\Maileditor\Models;

use Flyzard\Maileditor\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailTemplate extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'maileditor_mail_templates';

    protected $fillable = [
        'name',
        'subject',
        'content',
        'request',
        'envelope_id',
    ];

    protected $casts = [
        'request' => 'array',
    ];

    public function envelope(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\Flyzard\Maileditor\Models\Envelope::class);
    }
}
