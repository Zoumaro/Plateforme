<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        * {
            font-family: "Nanum Gothic", sans-serif;
        }
        body {
            background-image: url(image/d9.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
        }
    </style>
</head>
<body class="text-white">
<div class="max-w-4xl mx-auto font-[sans-serif] text-[#333] p-6">
      <div class="text-center mb-16">
        <h4 class="text-base font-semibold mt-3">Inscrivez-vous a votre compte</h4>
      </div>
      <form>
        <div class="grid sm:grid-cols-2 gap-y-7 gap-x-12">
          <div>
            <label class="text-sm mb-2 block">Nom</label>
            <input name="name" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Entrez le nom" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Prénom</label>
            <input name="lname" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Entrez le prenom" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Email</label>
            <input name="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Entrez  l'email" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Telephone</label>
            <input name="number" type="telephone" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Entrez votre numero" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Mot de passe</label>
            <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="Entrez mot de passe" />
          </div>
          <div>
            <label class="text-sm mb-2 block">Confirmer mot de password</label>
            <input name="cpassword" type="password" class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-500" placeholder="confirmer le mot de passe" />
          </div>
        </div>
        <div class="!mt-10">
        <div class="mt-8">
            <label class="text-sm mb-2 block">Type d'utilisateur</label>
            <div class="flex items-center space-x-4">
                <input type="radio" id="producteur" name="user_type" value="producteur">
                <label for="producteur" class="text-sm">Producteur</label>
                <input type="radio" id="client" name="user_type" value="client">
                <label for="client" class="text-sm">Client</label>
                <input type="radio" id="agro-entreprise" name="user_type" value="agro-entreprise">
                <label for="agro-entreprise" class="text-sm">Agro-Entreprise</label>
            </div>
          </div>
        <div class="mt-10">
          <button type="button" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
            S'inscrire
          </button>
        </div>
       
      </form>
    </div>
</body>
</html>








