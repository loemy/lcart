<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Email extends Model
{
    use SoftDeletes;
    protected $table = 'emails';
    protected $fillable = ['label', 'recipient', 'cc', 'bcc', 'subject', 'view', 'variables', 'body', 'from', 'attachments', 'attempts',
                          'sending', 'failed', 'error', 'encrypted', 'scheduled_at', 'sent_at', 'delivered_at', 'created_at', 'updated_at', 'deleted_at'];
    protected $casts = ['sending' => 'boolean', 'failed' => 'boolean', 'encrypted' => 'boolean'];
    protected $dates = ['scheduled_at', 'sent_at', 'delivered_at', 'created_at', 'updated_at', 'deleted_at'];

}
