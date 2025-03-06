<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VerifyRecaptcha
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->input('recaptcha_token');

        if (!$token) {
            return response()->json([
                'success' => false,
                'message' => 'reCAPTCHA verification failed'
            ], 400);
        }

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcqI-AqAAAAAK9kS9XGpK6R5jMlLeCCEG5vCQwo',
            'response' => $token
        ]);
        $result = $response->json(); // Convert response to array
        if (!empty($result['success']) && $result['success'] == true) {
            // Check the score for reCAPTCHA v3 (optional)
            if (isset($result['score']) && $result['score'] < 0.5) {
                return response()->json([
                    'success' => false,
                    'message' => 'Suspicious activity detected (low reCAPTCHA score).'
                ], 400);
            }

            return $next($request);
        }

        return response()->json([
            'success' => false,
            'message' => 'reCAPTCHA verification failed!'
        ], 400);
    }
}
