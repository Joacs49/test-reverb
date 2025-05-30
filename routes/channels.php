<?php

use Illuminate\Support\Facades\Broadcast;

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

// Broadcast::channel('messages.rooms.{id}', function ($user, $id) {
//     return $user->rooms->contains($id);
// });

Broadcast::channel('messages', function ($user) {
    return true;
});