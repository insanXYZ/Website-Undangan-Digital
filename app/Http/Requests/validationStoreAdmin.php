<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationStoreAdmin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $commonRules = [
            'slug' => 'required',
            'title' => 'required',
            'musik' => 'required|mimes:mp3',
            'iframe' => 'required',
            'warna_model' => 'required',
            'model' => 'required',
            'nama_pria' => 'required',
            'slug_nama_pria' => 'required',
            'instagram_pria' => 'nullable',
            'bapa_pria' => 'required',
            'ibu_pria' => 'required',
            'nama_wanita' => 'required',
            'slug_nama_wanita' => 'required',
            'instagram_wanita' => 'nullable',
            'bapa_wanita' => 'required',
            'ibu_wanita' => 'required',
            'tempat_akad' => 'required',
            'tanggal_akad' => 'required',
            'jam_akad' => 'required',
            'tempat_resepsi' => 'required',
            'tanggal_resepsi' => 'required',
            'jam_resepsi' => 'required',
            
        ] ;

        if($this->has('slideshow') || $this->has('coverD') ) {
            $secondRules = [
                'linkIg' => 'required',
                'slideshow' => 'required',
                'imgCouple' => 'required |image',
                'coverD' => 'required|image',
                'coverM' => 'required|image',
                'landingImageD' => 'required|image',
                'landingImageM' => 'required|image',
                'footerImageD' => 'required|image',
                'footerImageM' => 'required|image',
                'imgWanita' => 'required|image',
                'imgPria' => 'required|image',
                'story1_date' => 'required',
                'story2_date' => 'required',
                'story3_date' => 'required',
                'story1_text' => 'required',
                'story2_text' => 'required',
                'story3_text' => 'required',
                'story1_img' => 'required|image',
                'story2_img' => 'required|image',
                'story3_img' => 'required|image',
                'bank' => 'required',
                'norek' => 'required',
                'atasNama' => 'required',
            ];

            return array_merge($commonRules , $secondRules);
        }

        return $commonRules;
    }
}
