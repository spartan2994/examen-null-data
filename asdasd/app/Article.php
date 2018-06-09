<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  use Sluggable;

  /**
   * Return the sluggable configuration array for this model.
   *
   * @return array
   */
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
  }

  protected $table = "articles";
  protected $fillable = ['title', 'content', 'category_id', 'user_id'];//
  public function category()
  {
return $this->belongsTo('App\Category');

  }

  public function User()
  {
return $this->belongsTo('App\User');

  }

  public function Images()
  {
return $this->hasMany('App\Image');

  }

  public function Tags()
  {
return $this->belongsToMany('App\Tag');

  }
}
