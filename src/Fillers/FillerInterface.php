<?php

namespace MyPharmaBr\Plastic\Fillers;

use Illuminate\Database\Eloquent\Model;
use MyPharmaBr\Plastic\PlasticResult as  Result;

interface FillerInterface
{
    /**
     * Fill the results hists into Model.
     *
     * @param Model  $model
     * @param Result $result
     *
     * @return mixed
     */
    public function fill(Model $model, Result $result);
}
