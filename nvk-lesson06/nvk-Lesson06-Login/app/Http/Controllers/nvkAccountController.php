<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nvkAccountController extends Controller
{
    // Form login _ get
    public function nvkLogin()
    {
        return view('nvkLogin');
    }

    //Form login - post (Khi đăng nhập)
    /*
        Kiểm tra email, mật khẩu không được để trống 
        Nếu email = name@gmail.com và pass = 12345 thì lưu thông tin vào sesion với tên ở ví dụ trước 
    */
    public function nvkLoginSumbit(Request $request)
    {
        // Validation
        $validation = $request -> validate([
            'nvkEmail' => 'required|email',
            'nvkPassword' => 'required|min:6'
        ]);
        // Check login -> Store session -> Redirect home 
        $nvkEmail = $request -> input('nvkEmail');
        $nvkPassword = $request -> input('nvkPassword');

        $nvkLoginSession = [
            'nvkEmail'=> $nvkEmail,
            'nvkPassword'=> $nvkPassword
        ];

        $nvk_json = json_encode($nvkLoginSession);

        if ($nvkEmail == "name@gmail.com" && $nvkPassword == "123456")
        {
              // Lưu session 
              $request->session()->put('K23CNT2 - Nguyễn Khải',$nvkEmail);
              return redirect('/');
        }

        return redirect()->back()->with('nvkError', 'Lỗi đăng nhập');
    }

    // Logout 
    public function nvkLogout(Request $request)
    {
        $request->session()->forget('K23CNT2 - Nguyễn Khải ');
        request()-> session()->flush();
        return redirect('/');
    }
}
