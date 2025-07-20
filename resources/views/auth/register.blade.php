<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
            <h2 class="text-white text-lg font-semibold">Sign Up</h2>
        </div>
        
        <div class="bg-white px-8 py-6">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="first_name" id="name" required
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border" required>
                </div>
                <div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="last_name" id="name" required
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border mr-1"
                       required>
                </div>
                    <label for="signup-email" class="block text-sm font-medium text-gray-700 mr-1">Email Address</label>
                    <input type="email" name="email" id="signup-email" required
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border"
                        required>
                </div>
                <div>
                    <label for="signup-password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="signup-password" required minlength="8"
                        class="mt-1 block w-full input-field rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm h-10 px-3 border"
                       required>
                </div>

                <button type="submit" class="btn-primary w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>
</html>