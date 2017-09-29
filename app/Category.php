<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';

    protected $fillable = ['cat_name'];

    //protected $guarded = ['id'];


    /**
     * One sub category, belongs to a Main Category ( Or Parent Category ).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent() {
        return $this->belongsTo('App\Category', 'cat_parent_id');
    }


    /**
     * A Parent Category has many sub categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        return $this->hasMany('App\Category', 'cat_parent_id');
    }


    /**
     * One Category can have many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product() {
        return $this->hasMany('App\Product', 'id');
    }

    /**
     * find all primary categories
     */
    public static function primarycategories(){
        return static::where('cat_parent_id',0)->get();
    }
    public static function childcategories(Category $cat){
        return static::where('cat_parent_id',$cat->id)->get();
    }
    /**
     * Delete all sub categories when Main (Parent) category is deleted.
     */
    public static function boot() {
        // Reference the parent::boot() class.
        parent::boot();

        // Delete the parent and all of its children on delete.
        //static::deleted(function($category) {
        //    $category->parent()->delete();
        //    $category->children()->delete();
        //});

        Category::deleting(function($category) {
            foreach($category->children as $subcategory){
                $subcategory->delete();
            }
        });
    }


}