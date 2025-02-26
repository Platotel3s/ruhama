<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function halDaftar(){
        return view('auth.register');
    }
    public function daftar(Request $request){
        $request->validate([
            'role'=>'required|in:siswa,guru,walas,kepsek',
            'identifier'=>'required|unique:siswas,nisn|unique:gurus,nuptk|unique:walas,nuptk|unique:kepsek,nuptk',
            'nama'=>'required|string|max:255',
            'password'=>'required|string|min:6|confirmed',
            'nomorHp'=>'required|string|max:13',
            'alamat'=>'required|string|max:255',
        ]);
        $data=[
            'nama'=>$request->nama,
            'password'=>Hash::make($request->password),
            'nomorHp'=>$request->nomorHp,
            'alamat'=>$request->alamat,
        ];
        if($request->role === 'siswa'){
            $data['nisn']=$request->identifier;
            $data['role']='siswa';
            $user=Siswa::create($data);
        }else{
            $data['nuptk']=$request->identifier;
            if($request->role==='guru'){
                $data['role']==='guru';
                $user=Guru::create($data);
            }elseif($request->role==='walas'){
                $data['role']==='walas';
                $user=Walas::create($data);
            }elseif($request->role==='kepsek'){
                $data['role']==='kepsek';
                $user=Kepsek::creare($data);
            }
        }
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
    public function halLogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'identifier'=>'required',
            'password'=>'required',
            'role'=>'required|in:siswa,guru,walas,kepsek',
        ]);
        $credentials=['password'=>$request->password];
        if($request->role === 'siswa'){
            $credentials['nisn']=$request->identifier;
            $user=Siswa::where('nisn',$request->identfier)->first();
        }else{
            $credentials['nuptk']=$request->identifier;
            if($request->role==='guru'){
                $user=Guru::where('nuptk',$request->identifier)->first();
            }elseif($request->role==='walas'){
                $user=Walas::where('nuptk',$request->identifier)->first();
            }elseif($request->role==='kepsek'){
                $user=Kepsek::where('nuptk',$request->identifier)->first();
            }
        }
        if($user && Hash::check($request->password,$user->password)){
            Auth::login($user);
            return redirect()->route();
        }
    }
}
