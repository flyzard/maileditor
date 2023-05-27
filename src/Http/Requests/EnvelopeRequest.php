<?php

namespace Flyzard\Maileditor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvelopeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'type' => 'required|string',
            'identifier' => 'required|string|unique:maileditor_envelopes,identifier',
            'subject' => 'required|string',
            'from' => 'required|array',
            'from.address' => 'required|string',
            'from.name' => 'required|string',
            'to' => 'required|array',
            'to.*.address' => 'required|string',
            'to.*.name' => 'required|string',
            'cc' => 'nullable|array',
            'cc.*.address' => 'required|string',
            'cc.*.name' => 'required|string',
            'bcc' => 'nullable|array',
            'bcc.*.address' => 'required|string',
            'bcc.*.name' => 'required|string',
            'reply_to' => 'nullable|array',
            'reply_to.address' => 'required|string',
            'reply_to.name' => 'required|string',
        ];
    }
}
