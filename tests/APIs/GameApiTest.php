<?php

namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Game;

class GameApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_game()
    {
        $game = Game::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/games', $game
        );

        $this->assertApiResponse($game);
    }

    /**
     * @test
     */
    public function test_read_game()
    {
        $game = Game::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/games/'.$game->id
        );

        $this->assertApiResponse($game->toArray());
    }

    /**
     * @test
     */
    public function test_update_game()
    {
        $game = Game::factory()->create();
        $editedGame = Game::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/games/'.$game->id,
            $editedGame
        );

        $this->assertApiResponse($editedGame);
    }

    /**
     * @test
     */
    public function test_delete_game()
    {
        $game = Game::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/games/'.$game->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/games/'.$game->id
        );

        $this->response->assertStatus(404);
    }
}
