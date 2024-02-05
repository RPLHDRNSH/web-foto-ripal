<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Login</title>
</head>
<body>
  <!--
This example requires some changes to your config:

```
// tailwind.config.js
module.exports = {
  // ...
  plugins: [
    // ...
    require('@tailwindcss/forms'),
  ],
}
```
-->
<!--
This example requires updating your template:

```
<html class="h-full bg-white">
<body class="h-full">
```
-->
<div class="bg-gradient-to-r from-amber-700 via-amber-600 to-amber-500">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
<div class="sm:mx-auto sm:w-full sm:max-w-sm">
  <img class="mx-auto h-10 w-auto" src="https://cdn-icons-png.flaticon.com/128/2983/2983067.png" alt="Your Company">
  <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-50">Sign in to your account</h2>
</div>
<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <form class="space-y-6" action="#" method="POST">
    <div>
      <label for="email" class="block text-sm font-medium leading-6 text-gray-50">Email address</label>
      <div class="mt-2">
        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <div class="flex items-center justify-between">
        <label for="password" class="block text-sm font-medium leading-6 text-gray-50">Password</label>
        <div class="text-sm">
          <a href="#" class="font-semibold text-amber-400 hover:text-amber-700">Forgot password?</a>
        </div>
      </div>
      <div class="mt-2">
        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-amber-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <button type="submit" class="flex w-full justify-center rounded-md bg-amber-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-amber-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600">Sign in</button>
    </div>
  </form>

  <p class="mt-10 text-center text-sm text-gray-50">
  Already have an account?
    <a href="#" class="font-semibold leading-6 text-amber-400 hover:text-amber-700">Sign in</a>
  </p>
</div>
</div>

</body>
</html>