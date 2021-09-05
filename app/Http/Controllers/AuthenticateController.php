<?php

namespace App\Http\Controllers;

use App\Models\StudentMarkModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AuthenticateController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        $StEmail = $request->get('StEmail');
        $StPassword = $request->get('StPassword');
        try {
            $s = StudentMarkModel::where('StEmail', $StEmail)->where('StPassword', $StPassword)->firstOrFail();
            $request->session()->put('StId', $s->StId);
            $request->session()->put('StName', $s->StName);
            return Redirect::route("overview");
        } catch (Exception $e) {
            return Redirect::route("login")->with('error', [
                "message" => 'Sai Email hoặc password',
                "StEmail" => $StEmail
            ]);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route("login");
    }
}
