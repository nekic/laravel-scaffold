/**
     * @OA\Put(
     *      path="/{{ $config->modelNames->dashedPlural }}/{id}",
     *      summary="update{{ $config->modelNames->name }}",
     *      tags={"{{ $config->modelNames->name }} {{ $config->modelNames->title }}管理"},
     *      description="Update {{ $config->modelNames->name }}",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of {{ $config->modelNames->name }}",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/{{ $config->modelNames->name }}")
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
     *                  ref="#/components/schemas/{{ $config->modelNames->name }}"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
