<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
		'title_locale_en',
		'title_locale_zh_tw',
		'description_locale_en',
		'description_locale_zh_tw',
	];

}
