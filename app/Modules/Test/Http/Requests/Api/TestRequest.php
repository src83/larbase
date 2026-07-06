<?php

declare(strict_types=1);

namespace App\Modules\Test\Http\Requests\Api;

use App\Http\Requests\CommonRequest;

final class TestRequest extends CommonRequest
{
    /**
     * Get the validation rules that apply to the request
     * For 'GET' - params; For 'POST' - body;
     * @return string[]
     */
    public function rules(): array
    {
        $rules = [];

        // GET: index()
        if ($this->routeIs('api.public.test.list')) {
            $rules = ['page' => 'nullable|integer|min:1'];
        }

        // GET: show()
        if ($this->routeIs('api.public.test.show')) {
            $rules = ['id' => 'required|integer|between:0,5'];
        }

        // POST: store()
        if ($this->routeIs('api.public.test.store')) {
            $rules = ['email' => 'required|email'];
        }

        // PUT/PATCH: update()
        if ($this->routeIs('api.public.test.update')) {
            $rules = ['id' => 'required|integer|between:1,3'];
        }

        // DELETE: destroy()
        if ($this->routeIs('api.public.test.destroy')) {
            $rules = ['id' => 'required|integer|max:13'];
        }

        return $rules;
    }

    /**
     * Optional override for default validation messages.
     * If not defined, Laravel default validation translations are used.
     * Allows replacing specific messages with custom, domain-specific ones.
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => __('api_response.test.email_required'),
        ];
    }

    /**
     * Validation of params from ROUTE - Priority
     * @return array
     */
    public function validationData(): array
    {
        return array_merge($this->all(), [
            'id' => $this->route('id'),
        ]);
    }
}
