<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'email_verified_at'=>$request->email_verified_at,
            'rememberToken'=>$request->rememberToken,
            'attributes'=>[
                'name'=>$request->name,
                'username'=>$request->username,
                'email'=>$request->email,
                'password'=>$request->password
            ]
        ];
    }
}
