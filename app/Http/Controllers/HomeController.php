<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $title="User Dashboard | GhorBari.xyz";
      return view('user.pages.home')->with(compact('title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ownerUserHome()
    {
      $title="Owner Dashboard | GhorBari.xyz";
      return view('owner-user.pages.ownerUserHome')->with(compact('title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function agentUserHome()
    {
      $title="Agent Dashboard | GhorBari.xyz";
      return view('agent-user.pages.agentUserHome')->with(compact('title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
      $title="Admin Dashboard | GhorBari.xyz";
      return view('admin.pages.adminHome')->with(compact('title'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superAdminHome()
    {
      $title="Super Admin Dashboard | GhorBari.xyz";
      return view('super-admin.pages.superAdminHome')->with(compact('title'));
    }


}
