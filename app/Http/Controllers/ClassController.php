<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    /**
     * 用户抽奖页面，返回用户id
     */
    public function draw_view()
    {
            $u_id = mt_rand(1,10000);   //当前用户
            $res = DB::table('draw')->get()->toArray();
            return view('ldraw/draw_view',['u_id'=>$u_id,'kl'=>$res]);
    }
    /**
     * 执行抽奖页面
     */
    public function add_draw()
    {

    }
}
