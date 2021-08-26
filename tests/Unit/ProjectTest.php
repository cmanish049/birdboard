<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function project_has_path()
    {
        $project = Project::factory()->create();
        $this->assertSame('/projects/'. $project->id, $project->path());
    }
}
