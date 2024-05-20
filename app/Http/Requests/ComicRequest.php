<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'thumb' => 'required',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required',
            'artists' => 'required',
            'writers' => 'required',
            'type' => 'required|min:2|max:30'

        ];
    }
    public function messages(){



        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo non può contenere più di :max caratteri',
            'thumb.required' => 'Il thumb dell\' immagine è obbligatorio',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo non può contenere più di :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie non può contenere più di :max caratteri',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Il tipo deve contenere almeno :min caratteri',
            'type.max' => 'Il tipo non può contenere più di :max caratteri',
            'artists.required' => 'Almeno un attore è obbligatorio',
            'writers.required' => 'Almeno uno scrittore è obbligatorio'




        ];
    }
}
