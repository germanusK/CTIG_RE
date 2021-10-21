<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetsResource extends JsonResource
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
            'id'=> $request->id,
            'created_at'=> $request->created_at,
            'updated_at' => $request->updated_at,
            'attributes' => [
                'name' =>$request->name,
                'block_number'=>$request->block_number,
                'status' => $request->status,
                'description'=> $request->description
            ]
        ];
    }
}
