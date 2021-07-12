<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parent-Child Dependent Dropdowns</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
        <h2 class="font-bold text-2xl">Parent-Child Dependent Dropdowns: Vue.js</h2>

        <div id="app" class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
                Fill in the form. Choose the country, and cities list will be updated.
            </div>
            <country-city />
        </div>

        <a href="{{ route('livewire') }}" class="mb-4">See Livewire version</a>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
