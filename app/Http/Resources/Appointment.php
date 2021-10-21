<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Appointment extends JsonResource
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
            'attrubites'=>[
                'set_date'=>$request->set_date,
                'set_time'=>$request->set_time,
                'fee'=>$request->fee,
                'status'=>$request->status,
                'email'=>$request->email,
                'client_name'=>$request->client_name
            ]
        ];
    }
}
