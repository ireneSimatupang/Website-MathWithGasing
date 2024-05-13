<?php

use App\Models\User;

function getUserLencanaCount($id_user)
{
    $user = User::findOrFail($id_user);
    return $user->lencana->count();
}