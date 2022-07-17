<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

        $this->withExceptionHandling();

        $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url' => 'http:minuevoproyecto.com',
            'description' => 'This is the description'
        ]);



        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url' => 'http:misegundoproyecto.com',
            'description' => 'This is the description'
        ]);

        $response = $this->get(route('projects.index'));

        $response->assertStatus(200);

        $response->assertViewIs('projects.index');

        $response->assertViewHas('projects');

        $response->assertSee($project->title);

        $response->assertSee($project2->title);
    }

    public function test_can_see_individual_projects()
    {
        $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url' => 'http:minuevoproyecto.com',
            'description' => 'This is the description'
        ]);

        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url' => 'http:misegundoproyecto.com',
            'description' => 'This is the description'
        ]);

        $response = $this->get(route('projects.show', $project));


        $response->assertSee($project->title);
        $response->assertDontSee($project2->title);
    }
}
