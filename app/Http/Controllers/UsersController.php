<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;

class UsersController extends Controller
{
    public function show() 
    {
        $post = User::firstOrFail()->posts()->first();
        echo '第一個使用者的貼文編號：' . $post->id . PHP_EOL;
        $image = $post->images()->save(new Image());
        echo '貼文編號 ' . $post->id . ' 的圖片編號建立時間：'  . $image->created_at . PHP_EOL;
    }
}
