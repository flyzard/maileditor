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
        'indentifier',
        'subject',
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

    public function mailTemplates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\Flyzard\Maileditor\Models\MailTemplate::class);
    }

    public function equals(Envelope $envelope): bool
    {
        return $this->type == $envelope->type
            && $this->from == $envelope->from
            && $this->to == $envelope->to
            && $this->cc == $envelope->cc
            && $this->bcc == $envelope->bcc
            && $this->reply_to == $envelope->reply_to;
    }
}
