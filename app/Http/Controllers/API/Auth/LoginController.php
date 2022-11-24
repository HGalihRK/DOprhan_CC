<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (User::where('email', $request->email)->first()) {
            if (Auth::attempt($user)) {
                $GetUser = User::where('email', $request->email)->first();

                if ('1' == $GetUser->is_active) {
                    if ('0' ==$GetUser->is_login) {
                        $response = Http::asForm()->post('http://localhost:8012/cloudcomputing/DOprhan_CC/public/oauth/token', [
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->email,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);

                        if (!empty($response)) {
                            $this->isLogin(auth()->user()->id, $request);

                            return [
                        'status' => 'Login berhasil',
                        'userId' => ''.auth()->user()->id,
                        'result' => $response->json(),
                    ];
                        } else {
                            return response([
                                'status' => 'Mohon maaf, sistem sedang erorr',
                                'result' => null,
                            ]);
                        }
                    } else {
                        return [
                    'status' => 'Akun sudah login',
                    'result' => null,
                ];
                    }
                } else {
                    return [
                'status' => 'Akun anda diblokir',
                'result' => null,
            ];
                }
            } else {
                return [
                'status' => 'Password tidak sesuai',
                'result' => null,
            ];
            }
        } else {
            return [
            'status' => 'Akun tidak ditemukan',
            'result' => null,
        ];
        }
    }

    private function isLogin(int $id)
    {
        $user = User::findOrFail($id);

        return $user->update([
            'is_login' => '1',
        ]);
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required',
        ]);

        $response = Http::asForm()->post('http://localhost:8012/cloudcomputing/DOprhan_CC/public/oauth/token', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'scope' => '*',
        ]);

        return $response->json();
    }

    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        $accessToken = $user->token();

        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)
        ->update([
            'revoked' => true,
        ]);

        $accessToken->revoke();

        User::findOrFail($request->user_id)->update([
            'is_login' => '0',
        ]);

        return response([
            'message' => 'Berhasil keluar. Sampai jumpa lagi!',
        ]);
    }
}
