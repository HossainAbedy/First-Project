<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Employee extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' =>$this->id,
            'employee_name'=>$this->employee_name  
        ];
    }

    public function with($request)
    {
        //return parent::toArray($request);
        return [
            'version' =>'1.0.0',
            'developer'=>'Abedy'
        ];
    }
}
