<?php

namespace App\Http\Controllers\api\v1\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class CurrentUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return response()->json([
            'message' => 'Kullanıcı bilgileri başarıyla getirildi.',
            'user' => $request->user()
        ], Response::HTTP_OK);
    }
}
