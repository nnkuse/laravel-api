<?php

namespace App\Http\Resources\ListItem;

use Illuminate\Http\Resources\Json\Resource;

class ListItemCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'list_name' => $this->list_name,
            'agency' => $this->agency,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'net_income' => $this->net_income,
            'href' => [
                'link' => route('listitems.show', $this->id)
            ]
        ];
    }
}
