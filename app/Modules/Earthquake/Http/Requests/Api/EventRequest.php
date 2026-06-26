<?php

declare(strict_types=1);

namespace App\Modules\Earthquake\Http\Requests\Api;

use App\Http\Requests\CommonRequest;

final class EventRequest extends CommonRequest
{
    public function rules(): array
    {
        $rules = [];

        // GET: index()
        if ($this->routeIs('api.events.list')) {
            $rules = ['page' => 'nullable|integer|min:1'];
        }

        // GET: show()
        if ($this->routeIs('api.events.show')) {
            $rules = ['id' => 'required|integer|min:1'];
        }

        return $rules;
    }

    public function validationData(): array
    {
        return array_merge($this->all(), [
            'id' => $this->route('id'),
        ]);
    }
}
