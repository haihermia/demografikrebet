<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../assets/img_bg/loginhp.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .glass-container {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            border: 0.5px solid white;
            backdrop-filter: blur(10px);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: fadeInDown 0.5s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="glass-container">
        <h1 class="text-2xl font-bold mb-6 text-center text-white">Selamat Datang!</h1>
        <form method="post" action="<?php echo site_url('auth/login') ?>">
            <div class="mb-4">
                <label for="kd_admin" class="block text-white font-semibold mb-2">Kd_admin</label>
                <input autofocus type="text" id="kd_admin" name="kd_admin"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 bg-transparent text-white transition duration-500 ease-in-out transform hover:scale-105"
                    placeholder="Masukkan Kode admin" required autocomplete="off">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-white font-semibold mb-2">Password</label>
                <div class="relative">
                    <input type="password" id="pswd_admin" name="pswd_admin"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 bg-transparent text-white transition duration-500 ease-in-out transform hover:scale-105"
                        placeholder="Masukkan password" required autocomplete="off">
                    <i id="togglePassword" style="color: white; font-size: 0.5rem;"
                        class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer" onclick="togglePasswordVisibility()"
                        data-feather="eye"></i>
                </div>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200 transform hover:scale-105">Login</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<!-- show and hide password -->
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('pswd_admin');
        const togglePasswordButton = document.getElementById('togglePassword');

        if (passwordInput.getAttribute('type') === 'password') {
            passwordInput.setAttribute('type', 'text');
            togglePasswordButton.setAttribute('data-feather', 'eye-off');
        } else {
            passwordInput.setAttribute('type', 'password');
            togglePasswordButton.setAttribute('data-feather', 'eye');
        }
        feather.replace();
    }

    feather.replace();
</script>

</html>