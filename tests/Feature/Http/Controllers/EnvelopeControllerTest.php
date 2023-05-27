<?php

use Flyzard\Maileditor\Models\Envelope;
use Flyzard\Maileditor\Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia;

class EnvelopeControllerTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_can_create_envelopes()
    {
        $originalEnvelope = Envelope::factory()->make();

        $response = $this->post(
            route('maileditor.envelope.store'),
            $originalEnvelope->toArray()
        );

        // asserts it redirects to the correct route
        $response->assertRedirect(route('maileditor.index'));

        // asserts the database has the correct data
        $this->assertEquals(1, Envelope::count());
        $resultArray = Envelope::first();

        $this->assertObjectEquals($originalEnvelope, $resultArray);
    }

    public function test_can_list_envelopes()
    {
        Envelope::factory()->count(3)->create();

        $response = $this->get(route('maileditor.envelope.index'));

        $response->assertOk();

        $firstEnvelope = Envelope::first();

        // asserts the following properties are passed on the inertia page
        $response->assertInertia(fn (AssertableInertia $page) => $page
            ->component('Home')
            ->has('envelopes', 3, fn (AssertableInertia $page) => $page
                ->where('id', $firstEnvelope->id)
                ->where('type', $firstEnvelope->type)
                ->where('identifier', $firstEnvelope->identifier)
                ->where('subject', $firstEnvelope->subject)
                ->where('from', $firstEnvelope->from)
                ->where('to', $firstEnvelope->to)
                ->where('cc', $firstEnvelope->cc)
                ->where('bcc', $firstEnvelope->bcc)
                ->where('reply_to', $firstEnvelope->reply_to)
                ->where('deleted_at', $firstEnvelope->deleted_at)
                ->where('created_at', $firstEnvelope->created_at->toISOString())
                ->where('updated_at', $firstEnvelope->updated_at->toISOString())
            )
        );
    }
}
