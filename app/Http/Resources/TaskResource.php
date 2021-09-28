<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
//    public static $wrap = 'task';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name
            ],
            'title' => $this->title,
            'detail' => $this->detail,
            'due_date' => $this->due_date->format('j M y'),
            'created_at' => $this->created_at,
            'is_past' => $this->is_past,
            'is_urgent' => $this->is_urgent,
            'tag_names' => $this->tag_names,
            'tags' => $this->whenLoaded('tags')
        ];
    }
}
