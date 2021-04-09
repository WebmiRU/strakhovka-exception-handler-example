<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MiteIndexResource extends JsonResource
{
    /**
     * Ресурс бывает двух типов:
     * 1. "Как есть", т.е. "что передали то и вернёт"
     * 2. Конкретизированный
     * это соотв. ресурс типа "1"
     *
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
