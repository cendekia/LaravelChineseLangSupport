<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {

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
	 * @return array
	 */
	public function rules()
	{
		return [
			'title_locale_en' => 'required|min:3',
			'title_locale_zh_tw' => 'required|min:3',
			'description_locale_en' => 'required|min:3',
			'description_locale_zh_tw' => 'required|min:3',
		];
	}

}
