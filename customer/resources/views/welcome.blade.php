<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Laundry</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f5f9;
            color: #0f172a;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 380px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
        }

        .login-header {
            margin-bottom: 20px;
        }

        .login-header h1 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .login-header p {
            font-size: 13px;
            color: #64748b;
        }

        .alert-error {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            font-size: 13px;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 16px;
        }

        .form-group {
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #334155;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.15s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #2563eb;
        }

        .btn-submit {
            width: 100%;
            padding: 10px 14px;
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
            background-color: #2563eb;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 4px;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .session-box {
            margin-top: 16px;
            padding-top: 14px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12px;
            color: #475569;
        }

        .btn-logout {
            background: none;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 5px 10px;
            font-size: 12px;
            color: #334155;
            cursor: pointer;
        }

        .btn-logout:hover {
            background-color: #f8fafc;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <h1>Masuk ke Sistem</h1>
            <p>Silakan login untuk mengakses modul.</p>
        </div>

        @if (session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert-error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="nama@email.com"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="btn-submit">Masuk</button>
        </form>

        @auth
            <div class="session-box">
                <span>Login sebagai: <strong>{{ auth()->user()->email }}</strong></span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        @endauth
    </div>
</body>
</html>