<?php

namespace App\Http\Controllers\api\v1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /* Validation */
        $credentials = $request->validate([
            'username' => 'required|string|min:3|max:20',
            'password' => 'required|string|min:6',
        ]);

        /* Check authorization */
        if (!auth()->attempt($credentials)) {
            return response()->json([
                'message' => __('auth.failed')
            ], Response::HTTP_UNAUTHORIZED);
        }

        /*Delete old token*/
        $user = auth()->user();
        $device = substr($request->userAgent(), 0, 255);
        $user->tokens()->where('name', $device)->delete();

        /* Generate new token */
        $expiresAt = $request->remember_me ? null : now()->addMinutes(config('session.lifetime'));
        $token = $user->createToken($device, expiresAt: $expiresAt)->plainTextToken;

        return response()->json([
            'message' => 'Giriş işlemi başarılı.',
            'token' => $token
        ], Response::HTTP_OK);
    }
}
