<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#1D4ED8",
                    },
                },
            },
        };
    </script>
    <title>Digitaliz Courses</title>
</head>

<body class="mb-20 ">


    <nav class="bg-blue-700 px-3 md:px-0 border-gray-200 ">
        <div class="max-w-screen-xl  flex flex-wrap items-center justify-between mx-auto h-20">
            <a href="/">
                <span class="self-center text-white text-3xl font-bold whitespace-nowrap ">Digitaliz</span>
            </a>
            <ul>
                <li class="bg-white px-3 py-2 rounded-lg">
                    <a class="text-black font-semibold text-md" href="/courses/create">Create course</a>
                </li>
            </ul>
        </div>
    </nav>


    <main class="max-w-screen-xl mx-auto">
        {{ $slot }}
    </main>




</body>

</html>
