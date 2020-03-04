<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\User;
    use Illuminate\Http\Request;

    class RegisterController extends Controller
    {
        public function register(Request $request) {
            $user = User::create($request->all());
            return response()->json([
                'success' => [
                    'token' => $user->createToken(env('APP_NAME'))->accessToken,
                    'name' => $user->name,
                ],
            ]);
        }
    }
