<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class About extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$request->id,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at,
            'attributes'=>[
                'key'=>$request->key,
                'value'=>$request->value
            ]
        ];
    }
}
