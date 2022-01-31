<?php

namespace App\Http\Resources;

use App\Models\PractiseStorage;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class PractiseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'practice';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'naziv_vezbanja'=>$this->resource->naziv_vezbanja,
            'nivo_vezbanja'=>$this->resource->nivo_vezbanja,
            'tacno'=>$this->resource->tacno,
            'netacno'=>$this->resource->netacno,
            'datum_vezbanja'=>$this->resource->datum_vezbanja,
        ];
    }
}
