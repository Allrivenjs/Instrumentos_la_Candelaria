<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rules;

/**
 * @group Authenticating method v1
 *
 * APIs to manage the Authenticating requests
 *
 * This endpoint allows you to add a word to the list.
 * It's a really useful endpoint, and you should play around
 * with it for a bit.
 * <aside class="notice">We mean it; you really should.😕</aside>
 *
 */
class AuthController extends Controller
{

    /**
     * Login Auth
     *
     *
     * <aside class="notice"> Method to authenticate yourself in the api, it is necessary to use some of its functions</aside>
     *
     * @param Request $request
     * @unauthenticated
     * @bodyParam name string Example:"Julian"
     * @bodyParam password string Example:"passwordsecret"
     */
    public function login(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if (!auth()->attempt($request->only('name','password'))){
            return \response([])->setStatusCode(Response::HTTP_NOT_FOUND);
        }
        $tokenResult  = auth()->user()->createToken('authToken');
        $token = $tokenResult->token;
        $this->remember_me($token,$request);
        $token->save();
        $user=auth()->user();
        return  \response([$user,
            'access_token' =>$tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString(),])->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @param $token
     * @param Request $request
     * @return void
     */
    protected function remember_me($token, Request $request){
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
    }

    /**
     * @param Request $request
     * @unauthenticated
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|object
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            //User name. Example: UserSupersecret
            'name'=>'required|max:255',
            //User email. Example: UserSupersecret@gmail.com
            'email'=>'required|email',
            //User password.  Example: passwordsupersecret123@
            'password'=> ['required', Rules\Password::defaults()],
        ]);
        $validatedData['password']=Hash::make($request->password);
        $user = User::create($validatedData);
        $tokenResult = $user->createToken('authToken');
        $token=$tokenResult->token;
        return \response([
            $user,
            'access_token' =>  $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ])->setStatusCode(Response::HTTP_OK);
    }

    /**
     *
     * @param Request $request
     * Cierre de sesión (anular el token)
     */
    public function logout(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|object
     */
    public function reset_password(Request $request){

        $request->validate([
            'old_password'=>'required',
            'password'=> ['required', Rules\Password::defaults(), 'confirmed'],
        ]);

        if (!Hash::check($request->old_password,auth()->user()->getAuthPassword())){
            return response(['messsage'=>"Old password don't match"])->setStatusCode(Response::HTTP_FORBIDDEN);
        }
        if (Hash::check($request->password,auth()->user()->getAuthPassword())){
            return response(['messsage'=>'The password must be different from the previous one'])->setStatusCode(Response::HTTP_FORBIDDEN);
        }
        $request->user()->fill([
            'password'=>Hash::make($request->password)
        ])->save();
        return response(['messsage'=>'Password has been changed'])->setStatusCode(Response::HTTP_OK);

    }

}
