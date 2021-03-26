<?php

namespace Tests\Unit\Models;

use App\Models\User;
use App\Models\Repository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepositoryTest extends TestCase
{
    // equibale a ejecutar una migracion
    use RefreshDatabase;

    public function test_belongs_to_user()
    {
        $repository = Repository::factory()->create();
        // dd($repository->user)
        $this->assertInstanceOf(User::class, $repository->user);
    }
}
