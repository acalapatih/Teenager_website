<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="index.css" />
	<link rel="icon" href="assets\teenager-icon.png">

	<!-- Tailwind CDN -->
	<link rel="stylesheet" href="https://cdn.tailwindcss.com" />
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />

    <script type = "text/javascript" >  
        function preventBack() { window.history.forward(); }  
        setTimeout("preventBack()", 0);  
        window.onunload = function () { null };  
    </script>

	<title>Teenager | Login</title>
</head>

<body class="bg-gray-200">
	<div id="main" class="flex my-24 mx-64 rounded-3xl">
		<div id="leftSection" class="my-10 w-full">
			<div class="title p-2">
				<h2 class="text-2xl text-center px-10 font-semibold underline text-white">Teenager</h2>
				<h4 class="text-xs text-center px-10 font-semibold italic text-white">Teen Task Manager</h4>
			</div>
			<div>
                <h3 class="text-xl text-center font-semibold my-2">
                    Login
                </h3>
                <form action="login.php" method="post" class="text-center">
                    <div class="my-3">
                        <label for="email">Email</label></br>
                        <input type="text" name="email" class="rounded-2xl w-56 p-1" placeholder="Email" />
                    </div>

                    <div class="my-3">
                        <label for="password">Password</label></br>
                        <input type="password" name="password" class="rounded-2xl w-56 p-1" placeholder="Password" />
                    </div>

                    <p class="text-center">
                        Don't have account...?
                        <a href="register.php" class="italic underline my-3 hover:font-semibold">Register</a></br>
                    </p>

                    <input type="submit" name="submit" class="mt-3 rounded-2xl p-2 w-20 bg-white hover:font-semibold cursor-pointer" value="Login" />
                </form>
            </div>
		</div>
	</div>

	<!-- JAVASCRIPT -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>