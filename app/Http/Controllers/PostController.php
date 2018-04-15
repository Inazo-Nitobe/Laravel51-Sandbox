<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2018/04/15
 * Time: 22:03
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * 新ブログポスト作成フォームの表示
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 新しいブログポストの保存
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    //public function store()
    {
        $i = 0;
        // ブログポストのバリデーションと保存…
        $this->validate($request, [
            //'title' => 'required|unique:posts|max:255',
            'title' => 'required|max:10',
            //'title' => 'required',
            'body' => 'required',
        ]);

    }
}

