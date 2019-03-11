<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\Makeit;

class Contactus extends Authenticatable
{
    use Notifiable;

    protected static function boot()
    {
        parent::boot();

        self::created(function($model) {
            $model->notify(new Makeit());
        });
    }

    protected $fillable = [
        'contact_name',
        'contact_tel',
        'contact_email',
        'contact_refsite',
        'contact_content',
        'contact_agree',
    ];

    protected $hidden = [
        'remember_token',
    ];
    
    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }
}
