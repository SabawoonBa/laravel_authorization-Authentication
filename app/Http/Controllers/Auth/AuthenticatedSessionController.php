<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        if($request->user()->role === 'super_admin') {
            if($request->user()->status === 'active') {
                $url = 'admin';
                notify()->success('Successfully logged in.', 'Success');
            } else {
                notify()->error('Your account has been deactivated! Please contact the system admin.', 'Inactive account');
                $url = '/login';
                Auth::guard('web')->logout();
                return redirect($url);
            }
        } elseif($request->user()->role === 'supply_chain_manager') {
            $url = 'supply_chain';
        } elseif($request->user()->role === 'warehouse_operator') {
            $url = 'warehouse';
        } elseif($request->user()->role === 'sales_manager') {
            $url = 'sales';
        } elseif($request->user()->role === 'regional_sales_manager') {
            $url = 'regional_sales';
        } elseif($request->user()->role === 'regional_manager') {
            $url = 'regional';
        }

        return redirect()->intended($url);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
