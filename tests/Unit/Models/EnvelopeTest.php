<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Flyzard\Maileditor\Tests\TestCase;
use Flyzard\Maileditor\Models\MailTemplate;
use Flyzard\Maileditor\Models\Envelope;

class EnvelopeTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    public function test_ensures_envelope_can_have_many_mail_templates()
    {
        $envelope = Envelope::factory()->create();
        MailTemplate::factory()->create(['envelope_id' => $envelope->id]);
        MailTemplate::factory()->create(['envelope_id' => $envelope->id]);

        $this->assertCount(2, $envelope->mailTemplates);
    }
}
