<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGameAPIRequest;
use App\Http\Requests\API\UpdateGameAPIRequest;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\GameResource;

/**
 * Class GameController
 */

class GameAPIController extends AppBaseController
{
    /**
     * @OA\Get(
     *      path="/games",
     *      summary="getGameList",
     *      tags={"Game 游戏管理"},
     *      description="Get all Games",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="code",
     *                  type="number",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/Game")
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function index(Request $request): JsonResponse
    {
        $query = Game::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $games = $query->get();

        return $this->sendResponse(
            GameResource::collection($games),
            __('messages.retrieved', ['model' => __('models/games.plural')])
        );
    }

    /**
     * @OA\Post(
     *      path="/games",
     *      summary="createGame",
     *      tags={"Game 游戏管理"},
     *      description="Create Game",
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/Game")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="code",
     *                  type="number",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Game"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function store(CreateGameAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Game $game */
        $game = Game::create($input);

        return $this->sendResponse(
            new GameResource($game),
            __('messages.saved', ['model' => __('models/games.singular')])
        );
    }

    /**
     * @OA\Get(
     *      path="/games/{id}",
     *      summary="getGameItem",
     *      tags={"Game 游戏管理"},
     *      description="Get Game",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Game",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="code",
     *                  type="number",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Game"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function show($id): JsonResponse
    {
        /** @var Game $game */
        $game = Game::find($id);

        if (empty($game)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/games.singular')])
            );
        }

        return $this->sendResponse(
            new GameResource($game),
            __('messages.retrieved', ['model' => __('models/games.singular')])
        );
    }

    /**
     * @OA\Put(
     *      path="/games/{id}",
     *      summary="updateGame",
     *      tags={"Game 游戏管理"},
     *      description="Update Game",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Game",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/Game")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="code",
     *                  type="number",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/Game"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function update($id, UpdateGameAPIRequest $request): JsonResponse
    {
        /** @var Game $game */
        $game = Game::find($id);

        if (empty($game)) {
        return $this->sendError(
            __('messages.not_found', ['model' => __('models/games.singular')])
        );
        }

        $game->fill($request->all());
        $game->save();

        return $this->sendResponse(
            new GameResource($game),
            __('messages.updated', ['model' => __('models/games.singular')])
        );
    }

    /**
     * @OA\Delete(
     *      path="/games/{id}",
     *      summary="deleteGame",
     *      tags={"Game 游戏管理"},
     *      description="Delete Game",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Game",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="code",
     *                  type="number",
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function destroy($id): JsonResponse
    {
        /** @var Game $game */
        $game = Game::find($id);

        if (empty($game)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/games.singular')])
            );
        }

        $game->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/games.singular')])
        );
    }
}
