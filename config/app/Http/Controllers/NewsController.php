<?php

namespace App\Http\Controllers;

use App\Models\News; // <-- เพิ่มบรรทัดนี้เข้ามา
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * แสดงหน้ารวมข่าวทั้งหมด
     */
    public function index()
    {
        // ดึงข้อมูลข่าวทั้งหมดจากฐานข้อมูล เรียงจากใหม่ไปเก่า
        $allNews = News::latest()->get();

        // ส่งข้อมูลไปยัง view ชื่อ 'news.index'
        return view('news.index', ['allNews' => $allNews]);
    }

    /**
     * แสดงรายละเอียดข่าว 1 ชิ้น
     */
    public function show(News $news)
    {
        // Laravel จะค้นหาข่าวจาก ID ที่ส่งมาใน URL ให้โดยอัตโนมัติ (Route Model Binding)
        // ส่งข้อมูลข่าวที่พบไปยัง view ชื่อ 'news.show'
        return view('news.show', ['news' => $news]);
    }
}