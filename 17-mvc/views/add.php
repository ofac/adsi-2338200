<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MVC - Add User </title>
	<link rel="stylesheet" href="public/css/custom.css">
	<script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body>


<main class="my-10 mx-auto p-10 w-11/12 md:w-8/12 bg-black/40 rounded">
		<header class="text-white/50 flex gap-4 justify-center items-center pb-4 border-b-2 border-white/50">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
			<h1 class="text-3xl">Add User</h1>
		</header>
		<section>
			<a href="./" class="mt-8 p-2 flex justify-center items-center w-[200px] gap-2 bg-white/60 rounded hover:scale-105 transition hover:bg-white/70">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
				</svg>
				Back List Users
			</a>
			<form action="./" class="mt-8 flex flex-col gap-4 w-[420px] text-white/50 mx-auto" method="post" enctype="multipart/form-data">
				      <input type="hidden" name="method" value="store">
                <div class="flex items-center justify-between bg-white/10 p-4 rounded">
                  <label for="names">Full Name:</label>
                  <input type="text" class="p-2 rounded text-black/80 bg-white/60 w-[260px]" name="fullname" required>
                </div>
                <!--  -->
                <div class="flex items-center justify-between bg-white/20 p-4 rounded">
                  <label for="email">E-mail:</label>
                  <input type="email" class="p-2 rounded text-black/80 bg-white/60 w-[260px]" name="email" required>
                </div>
                <!--  -->
                <div class="flex items-center justify-between bg-white/10 p-4 rounded">
                  <label for="photo">Photo:</label>
                  <button type="button" class="w-[260px] bg-black/60 p-2 rounded flex gap-2 justify-center hover:scale-105 hover:bg-black/70 transition btn-upload"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                   </svg>
                    Select Photo 
                  </button>
                  <input type="file" class="file hidden" accept="image/*" name="photo" required>
                </div>
                <!--  -->
                <div class="flex items-center justify-between">
                  <button class="p-2 w-[200px] flex justify-center items-center gap-2 text-white/50 bg-green-600/60 rounded hover:scale-105 transition hover:bg-green-600/70">
                      Save
                  </button>
                  <button type="reset" class="p-2 w-[200px] flex justify-center items-center gap-2 text-black/50 bg-white/60 rounded hover:scale-105 transition hover:bg-white/70">
                      Clean
                  </button>
                </div>
      </form>
		</section>
	</main>
	
  <script src="public/js/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.btn-upload').click(function(e) {
        $('.file').click()
      })
    })
  </script>
</body>
</html>