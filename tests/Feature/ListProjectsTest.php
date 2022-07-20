<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListPro0jectsTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects()
    {


        $project = Project::factory()->create();


        $response = $this->get(route('projects.index'));

        $response->assertStatus(200);
        $response->assertViewIs('projects.index');
        $response->assertViewHas('projects');
        $response->assertSee($project->title);

    }


    public function test_can_see_individual_projects()
    {

        $project = Project::factory()->create();

        $response = $this->get(route('projects.show', $project));

        $response->assertSee($project->title);

    }
}
