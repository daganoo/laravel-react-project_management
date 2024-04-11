<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ProjectResource extends JsonResource
{
    /*
     * Transform the resource into an array.
     * @return array<string, mixed> 

     * 
     */
       public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'created_at' => (new Carbon($this->created_at))->format('Y-m-d'),
            'due_date' => (new Carbon($this->due_date))->format('Y-m-d'),
            'status' => $this->status,
            'image_path' => $this->image_path,
            'createdBy' => new UserResource( $this->createdBy),  // it has a conection to project.php created_by model, with the user (it's gonna return the user object )), // it has a conection to project.php created_by model, with the user (it's gonna return the user object )
            'updatedBy' => new UserResource( $this->updatedBy), //t has a conection to project.php updated_by model, with the user (it's gonna return the user object )
        ];
    }
}
   