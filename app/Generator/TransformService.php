<?php

namespace Generator;

use Illuminate\Http\UploadedFile;

class TransformService
{
    public function jsonToArray(UploadedFile $uploadFile): array
    {
        return json_decode(file_get_contents($uploadFile), true, 512, JSON_THROW_ON_ERROR);
    }

    public function setKeyInArray(array $data): array
    {
        $resultData = [];
        foreach ($data as $leaf) {
            $resultData[$leaf['id']] = $leaf;
        }

        return $resultData;
    }
}
