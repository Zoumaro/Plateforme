<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
      * {
        font-family: "Nanum Gothic", sans-serif;
      }
      body {
        background-image: url(image/im3.jpg);
        background-size: cover;
        background-repeat: no-repeat;
       
      }
    </style>
  </head>
  <body class="text-white">
  <div class="font-[sans-serif] text-[#333]">
      <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
          <form class="space-y-6 max-w-md md:ml-auto max-md:mx-auto w-full">
            <h3 class="text-3xl font-extrabold mb-8 max-md:text-center">
              Se connecter
            </h3>
            <div>
              <input name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600" placeholder="Adresse email" />
            </div>
            <div>
              <input name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600" placeholder="Mot de passe" />
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="remember-me" class="ml-3 block text-sm">
                  se souvenir de moi
                </label>
              </div>
              <div class="text-sm">
                <a href="jajvascript:void(0);" class="text-blue-600 hover:text-blue-500">
                  Mot de passe oublié ?
                </a>
              </div>
            </div>
            <div class="!mt-10">
              <button type="button" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Se connecter
              </button>
            </div>
          
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>