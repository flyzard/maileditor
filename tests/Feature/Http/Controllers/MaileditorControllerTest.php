<?php 

use Flyzard\Maileditor\Http\Controllers\MaileditorController;
use Inertia\Testing\AssertableInertia;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function () {
    $this->withoutExceptionHandling();
});

it('can render the mail editor component', function () {
    $response = get(route('maileditor.index'));

    $response->assertInertia(
        fn(AssertableInertia $page) => $page->component('Home')
    );
});