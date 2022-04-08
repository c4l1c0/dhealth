<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Medicine extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = ['codename', 'name', 'stock', 'additional_data', 'created_at'];

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
