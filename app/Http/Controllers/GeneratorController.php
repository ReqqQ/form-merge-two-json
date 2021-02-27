<?php

namespace App\Http\Controllers;

use Generator\GeneratorService;
use Generator\TransformService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class GeneratorController extends BaseController
{
    private const HOME_VIEW = 'layout.main';
    private TransformService $transformService;
    private GeneratorService $generatorService;

    public function __construct(TransformService $transformService, GeneratorService $generatorService)
    {
        $this->transformService = $transformService;
        $this->generatorService = $generatorService;
    }

    public function index(): View
    {
        return view(self::HOME_VIEW);
    }

    public function store(Request $request): void
    {
        $tree = $this->transformService->jsonToArray($request->file('treeJson'));
        $list = $this->transformService->jsonToArray($request->file('listJson'));

        $tree = $this->transformService->setKeyInArray($tree);
        $this->generatorService->mergeTreeAndList($tree, $list);
    }
}
