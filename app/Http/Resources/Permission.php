<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Permission extends JsonResource
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
                'permission_index'=>$request->permission_index,
                'description'=>$request->description
            ]
        ];
    }
}
