<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Log extends JsonResource
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
            'lead_this_month'=>$this->lead_this_month,
            'lead_till_this_month'=>$this->lead_till_this_month,
            'new_lead_this_month'=>$this->new_lead_this_month,
            'new_lead_till_this_month'=>$this->new_lead_till_this_month,
            'order'=>$this->order,
            'employee_id'=>$this->employee_id,
            'month'=>$this->month
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
