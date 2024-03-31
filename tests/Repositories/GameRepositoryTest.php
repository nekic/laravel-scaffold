<?php

namespace Tests\Repositories;

use App\Models\Game;
use App\Repositories\GameRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class GameRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    protected GameRepository $gameRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->gameRepo = app(GameRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_game()
    {
        $game = Game::factory()->make()->toArray();

        $createdGame = $this->gameRepo->create($game);

        $createdGame = $createdGame->toArray();
        $this->assertArrayHasKey('id', $createdGame);
        $this->assertNotNull($createdGame['id'], 'Created Game must have id specified');
        $this->assertNotNull(Game::find($createdGame['id']), 'Game with given id must be in DB');
        $this->assertModelData($game, $createdGame);
    }

    /**
     * @test read
     */
    public function test_read_game()
    {
        $game = Game::factory()->create();

        $dbGame = $this->gameRepo->find($game->id);

        $dbGame = $dbGame->toArray();
        $this->assertModelData($game->toArray(), $dbGame);
    }

    /**
     * @test update
     */
    public function test_update_game()
    {
        $game = Game::factory()->create();
        $fakeGame = Game::factory()->make()->toArray();

        $updatedGame = $this->gameRepo->update($fakeGame, $game->id);

        $this->assertModelData($fakeGame, $updatedGame->toArray());
        $dbGame = $this->gameRepo->find($game->id);
        $this->assertModelData($fakeGame, $dbGame->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_game()
    {
        $game = Game::factory()->create();

        $resp = $this->gameRepo->delete($game->id);

        $this->assertTrue($resp);
        $this->assertNull(Game::find($game->id), 'Game should not exist in DB');
    }
}
