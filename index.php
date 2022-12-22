<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="index.css" />

	<!-- Tailwind CDN -->
	<link rel="stylesheet" href="https://cdn.tailwindcss.com" />
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />

	<title>Teenager | Dashboard</title>
</head>

<body class="bg-gray-200">
	<div id="main" class="flex m-16 rounded-3xl">
		<div id="leftSection" class="inline-block my-10 w-3/12">
			<div class="title rounded-r-2xl p-2">
				<h2 class="text-2xl px-10 font-semibold underline text-white">Teenager</h2>
				<h4 class="text-xs px-10 font-semibold italic text-white">Teen Task Manager</h4>
			</div>
			<div class="category flex mt-8 p-3 px-10 rounded-r-md font-semibold cursor-pointer" onclick="window.location.href='index.php'">
				<img src="assets\to-do-list.png" class="w-1/12 inline-block" />
				<h3 class="inline-block text-lg ml-2 cursor-pointer">To Do List</h3>
			</div>
			<div class="category flex p-3 px-10 rounded-r-md font-semibold cursor-pointer" onclick="window.location.href='assignment/assignment.php'">
				<img src="assets\assignment.png" class="w-1/12 inline-block" />
				<h3 class="inline-block text-lg ml-2 cursor-pointer">Assignment</h3>
			</div>
			<div class="category flex p-3 px-10 rounded-r-md font-semibold cursor-pointer" onclick="window.location.href='event/event.php'">
				<img src="assets\event.png" class="w-1/12 inline-block" />
				<h3 class="inline-block text-lg ml-2 cursor-pointer">Event</h3>
			</div>
		</div>

		<div id="centerSection" class="inline-block p-8">
			<h1 class="text-xl mt-2 opacity-50">Hello, Dude</h1>
			<h3 class="text-3xl font-bold">Let's Do It</h3>
			<div class="todo p-5 rounded-2xl mt-5">
				<h3 class="text-2xl font-bold">To Do List</h3>
				<?php
					include('koneksi.php');
					$query = mysqli_query($conn, "SELECT * FROM todo ORDER BY id_toDo DESC") or die(mysqli_error($conn));

					if (mysqli_num_rows($query) == 0) {
						echo '<tr><td>Tidak ada data!</td></tr>';
					}

					while($data = mysqli_fetch_assoc($query)) {
						$no = $data['id_toDo'];
						echo '<div class="task mt-5 p-3 rounded-2xl">
							<div class="flex">
								<p name="description" class="inline-block ml-3">
									'.$data['description'].'
								</p>
								<a href="toDo/edit_toDo.php?id='.$data['id_toDo'].'"><button name="submit" value="true" class="updateStatus ml-2 p-1 rounded-2xl text-center inline-block">Finish</button></a>
							</div>';
							if ($data['status'] == 1) {
								$status = "Done";
							} else if ($data['status'] == 0) {
								$status = "On Going";
							}

							echo '<div class="flex my-1">
							<p name="status" class="status ml-4 p-2 rounded-2xl text-center inline-block">'.$status.'</p>
								<p class="status ml-3 p-2 rounded-2xl text-center inline-block">'.$data['date'].'</p>
								<a href="toDo/hapus.php?id='.$data['id_toDo'].'" class="delete ml-3 p-2 rounded-2xl text-center inline-block cursor-pointer hover:font-semibold">Delete</a>
							</div>
						</div>';
						$no++;
					}
				?>
				<button class="addList my-3 p-3 rounded-2xl font-semibold hover:font-bold" onclick="window.location.href='toDo/input-todolist.php'">Add List</button>
			</div>
		</div>

		<div id="rightSection" class="inline-block my-10">
			<div class="user flex py-2 mx-8">
				<img src="assets\user.png" class="inline-block my-3 rounded-xl" />
				<div class="inline-block">
					<h3 class="ml-3 text-xl font-semibold">Wat Sit To Ya</h3>
					<p class="ml-3 font-semibold">Mahasiswa</p>
				</div>
			</div>
			<div class="calendar mt-6">
				<h3 class="my-5 py-3 px-8 font-semibold text-xl rounded-l-2xl">Calendar</h3>
				<!-- <div id="app"></div> -->
				<div id="calendar" class="mx-8">
					<div id="calendar_header">
						<i class="icon-chevron-left"></i>
						<h1></h1>
						<i class="icon-chevron-right"></i>
					</div>
					<div id="calendar_weekdays"></div>
					<div id="calendar_content"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="app.js"></script>
</body>

</html>