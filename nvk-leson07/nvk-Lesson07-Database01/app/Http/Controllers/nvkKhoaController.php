<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nvkKhoaController extends Controller
{
    // Đọc dữ liệu từ bảng Khoa 
    public function nvkGetAllKhoa()
    {
        // Truy vấn dữ liệu từ bảng khoa 
        $nvkKhoa = DB::select("select * from nvkkhoa ");
        // Chuyển dữ liệu lên view 
        return view('nvkKhoa.nvkList',['nvkKhoa' => $nvkKhoa]);
    }
    public function detail($nvkMaKH)
    {
        //Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện nvkMaMH
        $nvkKhoa = DB::select('select * from nvkKhoa where nvkMaKH =? ',[$nvkMaKH])[0];
        return view('nvkKhoa.nvkDetail',['nvkKhoa'=>$nvkKhoa]);
    }
    // Edit - get
    public function edit($nvkMaKH)
    {
        $nvkKhoa = DB::select('select * from nvkKhoa where nvkMaKH =? ',[$nvkMaKH])[0];
        return view('nvkKhoa.nvkEdit',['nvkKhoa'=>$nvkKhoa]);
    }
    // Edit - sumbit 
    public function editSumbit(Request $request)
    {
        // Lấy dữ liệu mới trên form sửa 
        $nvkMaKH = $request->input('nvkMaKH');
        $nvkTenKH = $request->input('nvkTenKH');
        DB::update("update nvkkhoa set nvkTenKH=? where nvkMaKH=?",[$nvkTenKH,$nvkMaKH]);
        return redirect('/nvkKhoa');
    }

    // Insert - Get
        public function insert()
        {
            return view('nvkKhoa.nvkInsert');
        }

    // Insert - POST    
        public function insertSumbit(Request $request)
        {
            // Kiểm tra dữ liệu nhập 
            $validate = $request->validate([
                'nvkMaKH' => 'required|max:2',
                'nvkTenKH'=> 'required|max:50'
            ],
            [
                'nvkMaMH.required' => 'Nhập mã khoa.',
                'nvkMaMH.max' => 'Mã khoa ít nhất 2 kí tự.',
                'nvkTenMH.required' => 'Nhập tên khoa.',
                'nvkTenMH.max' => 'Tên khoa tối đa 50 kí tự.',
            ]
        );
            // Lấy dữ liệu form 
            $nvkMaKH = $request -> input('nvkMaKH');
            $nvkTenKH = $request -> input('nvkTenKH');

            // Ghi dữ liệu xuống database 
            DB::insert("insert into nvkkhoa(nvkMaKH,nvkTenKH) values (?,?)",[$nvkMaKH,$nvkTenKH]);
            // Chuyển sang trang danh sách 
            return redirect('/nvkKhoa');
        }

    // Delete 
    public function delete($nvkMaKH)
    {
        DB::delete("delete from nvkkhoa where nvkMaKH=?",[$nvkMaKH]);
        // Chuyển trang danh sách 
        return redirect('/nvkKhoa');
    }
}
