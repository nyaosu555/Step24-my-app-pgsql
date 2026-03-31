<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    //
    public function index() {
        // ログインユーザーのメニューを「メイン」「副菜A」「副菜B」に分けて取得する
        $menus = Menu::where('user_id', auth()->id())->get();

        return view('slot.index', compact('menus'));
    }
}
