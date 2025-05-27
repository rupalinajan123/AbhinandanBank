<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\PasswordLog;
use Illuminate\Support\Facades\Hash;

class NotInLastPasswords implements Rule
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function passes($attribute, $value)
    {
        $lastPasswords = $this->getLastPasswords();

        foreach ($lastPasswords as $hashedPassword) {
            if (Hash::check($value, $hashedPassword)) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'The new password cannot be one of the last 5 passwords.';
    }

    protected function getLastPasswords()
    {
        return PasswordLog::where('user_id', $this->user->id)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->pluck('password_logs')
            ->toArray();
    }
}
