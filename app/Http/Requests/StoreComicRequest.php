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
            'title' => 'required|max:255',
            'description' => 'required|max:5000',
            'thumb' => 'nullable|max:5000',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:50',
            'artists' => 'required|max:1000',
            'writers' => 'required|max:1000',
        ];
    }


    public function messages(): array
    {
        return [
            'required' => 'Inserire :attribute',
            'max' => 'Il campo :attribute deve avere massimo :max caratteri',
            'title' => 'titolo',
            'description' => 'descrizione',
            'thumb' => 'immagine',
            'price' => 'prezzo',
            'series' => 'serie',
            'sale_date' => 'data di uscita',
            'type' => 'tipo',
            'artists' => 'artisti',
            'writers' => 'scrittori',
        ];
    }
}
