<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExceptionResource extends JsonResource
{
    /**
     * Ресурс типа "2"
     * Это просто ПРИМЕР, дотошно код никто не вылизывал, констант с HTTP-кодами тут, которые должны бы быть
     * и ряда других "полезностей" тут тоже нет, но думаю что для примера тут и так всего вполне достаточно
     *
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        /**
         * Можно передавать массив, можно передавать объект, можно передавать и то и другое и сделать вот,
         * для большей универсальности и удобсвта работы
         */
        $v = (object)$this->resource;


        /**
         * Тут оба варианта работы, и с массивом и с объектом
         * просто ДЛЯ ПРИМЕРА
         * и работает по тому, что МЫ ИСХОДНО ПЕРЕДАЛИ СУДА МАССИВ
         * в "продакшене" соотв. нужно будет остановиться на каком-то одном конечном варианте
         */
        return [
            'message' => $this['message'],
            'class' => $this['class'],
            'code' => $this['code'] ?? 999,
            'new_string' => $v->newString ?? '12345',
        ];
    }

    public function withResponse($request, $response)
    {
        // Маппинг HTTP-кодов с кодами ошибок
        switch ($this['code'] ?? null) {
            case 999:
            case 998:
            case 997:
                $httpCode = 406;
                break;
            case 996:
                $httpCode = 403;
                break;
            default:
                $httpCode = 500;
                break; // Вообще, он тут не обязателен... но для сохранения единого стиля лишним не будет
        }

        $response->setStatusCode($httpCode);
    }
}
