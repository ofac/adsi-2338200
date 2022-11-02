<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MVC - Show User </title>
	<link rel="stylesheet" href="public/css/custom.css">
	<script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body>

<main class="my-10 mx-auto p-10 w-11/12 md:w-8/12 bg-black/40 rounded">
		<header class="text-white/50 flex gap-4 justify-center items-center pb-4 border-b-2 border-white/50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
				<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
			</svg>
			<h1 class="text-3xl">Show User</h1>
		</header>
		<section>
			<a href="./" class="mt-8 p-2 flex justify-center items-center w-[200px] gap-2 bg-white/60 rounded hover:scale-105 transition hover:bg-white/70">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
				</svg>
				Back List Users
			</a>
			<table class="mt-10 text-white/50 w-[100%] mx-auto ring-1 ring-white/50 rounded">
				<?php while($row = mysqli_fetch_array($data)): ?>
				<tr>
					<td colspan="2" class="text-center">
						<img src="<?php echo $row['photo'] ?>" class="m-2 mx-auto" width="220px">
					</td>
				</tr>
				<tr class="odd:bg-white/20 bg-white/10">
					<th class="py-2 px-4 text-left">Full Name:</th>
					<td><?php echo $row['fullname'] ?></td>
				</tr>
				<tr class="odd:bg-white/20 bg-white/10">
					<th class="py-2 px-4 text-left">E-mail:</th>
					<td><?php echo $row['email'] ?></td>
				</tr>
				<tr class="odd:bg-white/20 bg-white/10">
					<th class="py-2 px-4 text-left">Role:</th>
					<td><?php echo $row['role'] ?></td>
				</tr>
				<?php endwhile ?>
			</table>
		</section>
	</main>
	
</body>
</html>