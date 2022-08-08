<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GeneralController extends Controller
{
    public function index()
    {
      if(!Auth::user()){
        $title="GhorBari.xyz | Best Solution for Household Problems";
        return view('general.pages.welcome')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function properties()
    {
      if(!Auth::user()){
        $title="Properties | GhorBari.xyz";
        return view('general.pages.properties')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function agents()
    {
      if(!Auth::user()){
        $title="Agents | GhorBari.xyz";
        return view('general.pages.agents')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function whoWeAre()
    {
      if(!Auth::user()){
        $title="Who We Are | GhorBari.xyz";
        return view('general.pages.who-we-are')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function contact()
    {
      if(!Auth::user()){
        $title="Contact | GhorBari.xyz";
        return view('general.pages.contact')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function terms()
    {
      if(!Auth::user()){
        $title="Terms & Conditions | GhorBari.xyz";
        return view('general.pages.terms-and-conditions')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
    public function privacyPolicy()
    {
      if(!Auth::user()){
        $title="Privacy Policy | GhorBari.xyz";
        return view('general.pages.privacy-policy')->with(compact('title'));
      }
      else{
        if (auth()->user()->type == 'super-admin') {
            return redirect()->route('super.admin.home');
        }else if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }else if (auth()->user()->type == 'agent-user') {
            return redirect()->route('agent.user.home');
        }else if (auth()->user()->type == 'owner-user') {
            return redirect()->route('owner.user.home');
        }else{
            return redirect()->route('home');
        }
      }
    }
}
