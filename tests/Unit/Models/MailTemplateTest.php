<?php

use Flyzard\Maileditor\Models\MailTemplate;
use Flyzard\Maileditor\Tests\TestCase;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MailTemplateTest extends TestCase
{
    public function test_it_has_a_table_name_of_maileditor_mail_templates()
    {
        $mailTemplate = new MailTemplate;

        $this->assertEquals('maileditor_mail_templates', $mailTemplate->getTable());
    }

    public function test_the_fillable_fields_are_name_subject_slug_content_request_and_envelope_id()
    {
        $mailTemplate = new MailTemplate;

        $fillable = ['name', 'subject', 'slug', 'content', 'request', 'envelope_id'];

        $this->assertEquals($fillable, $mailTemplate->getFillable());
    }

    public function test_it_casts_the_request_as_array()
    {
        $mailTemplate = new MailTemplate;

        $casts = ['id' => 'int', 'request' => 'array'];

        $this->assertEquals($casts, $mailTemplate->getCasts());
    }

    public function test_it_has_a_belongsTo_relationship_with_the_Envelope_model()
    {
        $mailTemplate = new MailTemplate;

        $this->assertInstanceOf(BelongsTo::class, $mailTemplate->envelope());
    }

    public function test_it_gets_the_route_key_name_as_slug()
    {
        $mailTemplate = new MailTemplate;

        $this->assertEquals('slug', $mailTemplate->getRouteKeyName());
    }
}
