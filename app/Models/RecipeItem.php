<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class RecipeItem extends Model
{
    use HasFactory, softDeletes;

	protected $fillable = ['recipe_id', 'medicine_id', 'amount'];

	public function medicine(){
		return $this->hasOne(Medicine::Class);
	}

	public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

	protected static function boot() {
		parent::boot();

		static::creating(function ($model) {
			$model->created_by = is_object(Auth::guard(config('app.guards.web'))->user()) ? Auth::guard(config('app.guards.web'))->user()->id : 1;
			$model->updated_by = is_object(Auth::guard(config('app.guards.web'))->user()) ? Auth::guard(config('app.guards.web'))->user()->id : 1;
		});

		static::updating(function ($model) {
			$model->updated_count = $model->update_count + 1;
			$model->updated_by = is_object(Auth::guard(config('app.guards.web'))->user()) ? Auth::guard(config('app.guards.web'))->user()->id : 1;
		});
		static::deleting(function ($model) {
			$model->deleted_by = is_object(Auth::guard(config('app.guards.web'))->user()) ? Auth::guard(config('app.guards.web'))->user()->id : 1;
			$model->is_deleted = 1;
			$model->is_active = 0;
		});
	}
}
