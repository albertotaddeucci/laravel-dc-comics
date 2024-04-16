<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'nullable|max:1000',
            'thumb' => 'nullable',
            'price' => 'required|max:50',
            'series' => 'nullable|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => "Devi inserire un titolo",
            'title.max' => 'Deve avere un massimo di :max caratteri',

            'description.max' => 'Deve avere un massimo di :max caratteri',

            'price.required' => 'Devi inserire il prezzo',
            'price.max' => 'Deve avere un massimo di :max caratteri',

            'series.max' => 'Deve avere un massimo di :max caratteri',

            'sale_date.required' => 'Devi inserire la data',
            'sale_date.date' => 'Devi inserire una data nel formato YYYY-mm-dd',

            'type.required' => 'Devi inserire il tipo',
            'type.max' => 'Deve avere un massimo di :max caratteri',

            'artists.required' => 'Devi inserire uno o più artisti',
            'artists.max' => 'Deve avere un massimo di :max caratteri',

            'writers.required' => 'Devi inserire uno o più scrittori',
            'writers.max' => 'Deve avere un massimo di :max caratteri'
        ];
    }
}
