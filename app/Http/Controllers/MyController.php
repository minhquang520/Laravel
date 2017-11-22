<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//có thể request
use App\Http\Requests; 

class MyController extends Controller
{
    public function XinChao()
    {
        echo "Xin Chao May Be";
    }

    public function KhoaHoc($ten)
    {   
        echo "Khoa hoc: " .$ten;
        //Gọi định danh bên MyRoute
        //return redirect()->route('MyRoute');
    }

    public function GetURL(Request $request)
    {
        //trả về đường dẫn 
        //echo $request->path(); //path đổi url để xuất toàn đường dẫn

        //kiểm tra phương thức get
        // if($request->isMethod('Get'))
        //     echo "Phương thức get";
        // else
        //     echo "Không phải phương thức get";

        //tìm chuỗi trong đương dân: is('');
        if($request->is('My*'))
            echo "Có My";
        else
            echo "Không Có My";
    }

    public function postForm(Request $request) 
    {
        echo "Ten của bạn là: ";
        echo $request->HoTen;
    }
}
