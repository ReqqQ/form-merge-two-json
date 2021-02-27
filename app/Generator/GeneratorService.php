<?php

namespace Generator;

class GeneratorService
{
    public function mergeTreeAndList(array $tree, array $list): array
    {
        foreach ($list as $leaf) {
            $categoryId = $leaf['category_id'];

            if ($this->treeHasCategoryId($categoryId)) {
                $tree[$categoryId]['name'] = $leaf['translations']['pl_PL']['name'];
            }
        }

        return $tree;
    }

    public function treeHasCategoryId(int $categoryId): bool
    {
        return isset($tree[$categoryId]);
    }
}
