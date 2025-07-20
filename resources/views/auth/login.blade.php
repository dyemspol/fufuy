<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
            transition: all 0.2s ease;
        }
        
        .form-container {
            background-color: #2d3748;
        }
        
        .input-field {
            border-color: #4a5568;
        }
        
        .input-field:focus {
            border-color: #718096;
            box-shadow: 0 0 0 2px rgba(113, 128, 150, 0.3);
        }
        
        .btn-primary {
            background-color: #2d3748;
        }
        
        .btn-primary:hover {
            background-color: #4a5568;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="form-container rounded-lg shadow-xl w-full max-w-md overflow-hidden">
        <div class="bg-gray-800 px-6 py-4">
            <h2 class="text-white text-lg font-semibold">Login</h2>
        </div>
        
        <div class="bg-white px-8 py-6">
            <form method="POST" action="{{ route('validate') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="login-email" required
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border"
                        placeholder="you@example.com">
                </div>
                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="login-password" required
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border"
                    >
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="{{ route('signup') }}" class="font-medium text-gray-600 hover:text-gray-500">Dont have an Account?</a>
                    </div>
                </div>
                <button type="submit" class="btn-primary w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Log in
                </button>
            </form>
        </div>
    </div>
</body>
</html>