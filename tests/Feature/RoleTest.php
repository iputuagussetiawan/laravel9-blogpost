<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanShowRolePage()
    {
        $user = User::role('it')->get()->random();
        $this->actingAs($user);
        $this->get('/roles')
            ->assertOK();

        //$response->assertStatus(200);
    }

    public function testCannotShowRolePage()
    {
        $user = User::role('staff')->get()->random();
        $this->actingAs($user);
        $this->get('/roles')
            ->assertStatus(403);
    }


    public function testCannotShowRolePageNotLogin()
    {
        $this->get('/roles')
            ->assertRedirect('login')
            ->assertStatus(302);
    }

    public function testCanCreateRole()
    {
        $user = User::role('it')->get()->random();
        $this->actingAs($user);
        $this->get('/roles/create')
            ->assertOK();
    }

    public function testCannotCreateRole()
    {
        $user = User::role('staff')->get()->random();
        $this->actingAs($user);
        $this->get('/roles/create')
            ->assertStatus(403)
            ->assertSeeText('unauthorized');
    }

    public function testCannotCreateRolePageNotLogin()
    {
        $this->get('/roles/create')
            ->assertRedirect('login')
            ->assertStatus(302);
    }
}
