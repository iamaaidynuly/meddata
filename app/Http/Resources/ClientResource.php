<?php

namespace App\Http\Resources;

use App\Models\ClientBadHabit;
use App\Models\ClientLifestyle;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['bad_habits'] = ClientBadHabit::join('bad_habits', 'bad_habits.id', 'client_bad_habits.bad_habit_id')
            ->where('client_id', $this->id)->select('client_bad_habits.id','client_bad_habits.client_id','bad_habits.title')->get();
        $data['lifestyles'] = ClientLifestyle::join('lifestyles', 'lifestyles.id', 'client_lifestyles.lifestyle_id')
            ->where('client_id', $this->id)->select('client_lifestyles.id','client_lifestyles.client_id','lifestyles.title')->get();

        return $data;
    }
}
