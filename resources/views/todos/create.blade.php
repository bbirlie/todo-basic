<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Todo</title>
  @vite('resources/css/app.css')

</head>
  <body class="bg-gray-800 text-white">
    <section class="bg-gray-500 mt-36 text-center mx-auto min-w-[300px] max-w-[600px] w-3/5">
      <form action="/todos" method="POST">
        @csrf

        <div class="flex flex-col">
          <label for="title">Title:</label>
          <div>
            <input type="text" id="title" name="title">
          </div>
        </div>
        <div>
          <label for="description">Description:</label>
          <textarea id="description" name="description"></textarea>
        </div>
        <div>
          <button class="py-2 px-5 bg-gray-600 rounded-lg" type="submit">Submit</button>
        </div>
      </form>
    </section>
  </body>
</html>