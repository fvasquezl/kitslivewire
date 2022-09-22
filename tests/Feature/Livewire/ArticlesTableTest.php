<?php

namespace Tests\Feature\Livewire;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticlesTableTest extends TestCase
{
    /** @test */
    public function article_component_renders_property()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('articles.index'))
            ->assertSeeLivewire('articles-table');
    }
}
