<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Basic Todo</title>
</head>
<body class="bg-gray-700 text-white">
  <section class="bg-gray-500 text-center mx-auto min-w-[300px] max-w-[800px] w-3/5">
    <nav>
     <div class="flex flex-col p-7">
      <a class="text-5xl py-4 bg-gray-400 rounded-lg" href="/create">Create</a>
     </div>
    </nav>
  </section>

  <section class="bg-gray-500 text-center mx-auto min-w-[300px] max-w-[800px] w-3/5">
    <div class="border min-h-30 bg-gray-400 max-w-1/3 mx-auto flex flex-col justify-between">
      <h3>Title</h3>
      <p>Take out the trash</p>
      <p>Status</p>
    </div>
    <div class="border min-h-30 max-w-1/3 bg-gray-400 mx-auto flex flex-col justify-between">
      <h3>Title</h3>
      <p>Take out the trash</p>
      <p>Status</p>
    </div>
  </section>
</body>
</html>