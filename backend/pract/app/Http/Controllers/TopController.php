<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;
use App\Models\User;

class TopController extends Controller
{
    //
    public function index(){
        // $loginId = Auth::loginUser()->id;
        $loginId = 19012;
        return $this->getProfile($loginId, true);
    }

    /**
     * @param int userId
     * @param bool mineFlg true: ログインユーザー false: 閲覧用
     */
    public function getProfile($userId, $mineFlg) {
        return '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            一応これで表示はできるけどね。何も機能を使わないで表示。HTMLそのまま返す。
        </body>
        </html>';
        // $user = User::find($userId);
        // return [
        //     'user_id' => $userId,
        //     'name' => 'hey01',
        //     'comment' => '一言を描く',
        // ];
        // return view([], 'user');
    }
}
