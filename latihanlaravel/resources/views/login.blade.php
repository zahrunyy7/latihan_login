@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 20px;">
        
        <div class="card-y2k" style="max-width: 400px; width: 100%; text-align: center; background-color: white;">
            
            <h1 style="color: #192A56; margin-bottom: 20px; border-bottom: 3px solid #00FFFF; padding-bottom: 10px;">
                LOGIN SISTEM
            </h1>

            <form action="/login" method="POST">
                
                <div style="margin-bottom: 15px; text-align: left;">
                    <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="user@domain.com" required 
                           style="width: 100%; padding: 12px; border: 2px solid #192A56; border-radius: 8px; background-color: #FAF0D4; box-sizing: border-box; font-family: 'Courier New', monospace;">
                </div>

                <div style="margin-bottom: 25px; text-align: left;">
                    <label for="password" style="display: block; margin-bottom: 5px; font-weight: bold;">Password Kunci</label>
                    <input type="password" id="password" name="password" placeholder="*** PASSWORD RAHASIA ***" required 
                           style="width: 100%; padding: 12px; border: 2px solid #192A56; border-radius: 8px; background-color: #FAF0D4; box-sizing: border-box; font-family: 'Courier New', monospace;">
                </div>

                <button type="submit" class="btn-y2k" style="width: 100%; margin-bottom: 15px;">
                    LOGIN > PROCEED
                </button>
            </form>

            <p style="font-size: 0.9em;">
                Belum punya akun? <a href="{{ url('/register') }}" style="color: #00FFFF; text-decoration: none; font-weight: bold; text-shadow: 0 0 5px #00FFFF;">Daftar di sini.</a>
            </p>
            
        </div>
    </div>
@endsection