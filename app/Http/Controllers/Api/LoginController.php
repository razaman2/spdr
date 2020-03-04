<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        public function login(Request $request) {
            if(Auth::attempt($request->all())) {
                $user = Auth::user();
                return response()->json([
                    'success' => [
                        'token' => $user->createToken(env('APP_NAME'))->accessToken
                    ]
                ], 200);
            } else {
                return response()->json([
                    'error' => 'Unauthorized'
                ], 401);
            }
        }
    }
