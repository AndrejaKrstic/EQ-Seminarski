<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'word';
    public function toArray($request)
    {
        return [
            'rec'=>$this->resource->rec,
            'vrsta_reci'=>$this->resource->vrsta_reci,
            'prevod'=>$this->resource->prevod,
            'rod'=>$this->resource->rod,
            'mnozina'=>$this->resource->mnozina,
            'nivo'=>$this->resource->nivo,
            'tag1'=>$this->resource->tag1,
        ];
    }
}
