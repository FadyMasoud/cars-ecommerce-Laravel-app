<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class categoryResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'pd_name' => $this->pd_name,
            'images' => $this->images,
            'description' => $this->description,
            'price' => $this->price,
            'speed' => $this->speed,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'image_link' => asset('storage/' . $this->images)
        ];
    }
}
