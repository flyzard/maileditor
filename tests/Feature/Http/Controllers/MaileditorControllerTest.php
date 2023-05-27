<?php

use Flyzard\Maileditor\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia;

class MailEditorTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function test_can_render_the_mail_editor_component()
    {
        $response = $this->get(route('maileditor.index'));

        $response->assertInertia(
            fn(AssertableInertia $page) => $page->component('Home')
        );
    }
}
