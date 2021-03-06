<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class PasswordResetTest extends TestCase
{
    public function testResetPasswordPage()
    {
      $response = $this->get('/password/reset');

      $response->assertStatus(200)
               ->assertSee('E-Mail Address')
               ->assertSee('Reset Password')
               ->assertSee('Send Password Reset Link');
    }

    public function testResetPassword()
    {
      $user = factory(User::class)->create();
      $data =["email" => $user->email];
      $response = $this->post("/password/email",$data);
      $response->assertStatus(302);
    }
}
