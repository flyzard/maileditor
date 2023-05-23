<?php

namespace Flyzard\Maileditor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    use HasFactory;

    protected $table = 'maileditor_envelopes';

    protected $fillable = [
        'type',
        'from',
        'to',
        'cc',
        'bcc',
        'reply_to',
    ];

    protected $casts = [
        'from' => 'array',
        'to' => 'array',
        'cc' => 'array',
        'bcc' => 'array',
        'reply_to' => 'array',
    ];

    public function mailTemplates()
    {
        return $this->hasMany(MailTemplate::class);
    }
}
