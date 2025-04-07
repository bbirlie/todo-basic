<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Basic Todo</title>
</head>
<body class="bg-gray-700 text-white flex items-center h-screen">
  <section class="bg-gray-500 text-center mx-auto min-w-[300px] max-w-[800px] w-3/5">
    <nav class="">
      <ul class="border border-black flex flex-col justify-between gap-10 p-10">
        <li class="text-5xl"><a href="/">Todo</a></li>
        <li class="text-5xl"><a href="/show">View</a></li>
        <li class="border border-black rounded-md text-5xl py-3"><a class="m-0" href="/create">Create</a></li>
      </ul>
    </nav>
  </section>
</body>
</html>