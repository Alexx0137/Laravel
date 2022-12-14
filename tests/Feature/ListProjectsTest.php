<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Database\Factories\ProjectFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListProjectsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects()
    {

        $user = User::factory()->create();

        $project = Project::factory()->create();
        $project2 = Project::factory()->create();

        $response = $this->get(route('projects.index')); /*el proyecto deberíamos verlo en la ruta project.index*/
        $response->assertStatus(200);
        $response->assertViewIs('projects.index');
        $response->assertViewHas('projects'); /*verificar si existe la variable*/
        $response->assertSee($project->title);
        $response->assertSee($project2->title);
    }

    public function test_can_see_individual_projects()
    {

        $project = Project::factory()->create();
        $project2 = Project::factory()->create();

        $response = $this->get(route('projects.show'));
        $response->assertSee($project->title);
        $response->assertDontSee($project2->title);
    }
}







