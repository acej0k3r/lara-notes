<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - Page Not Found</title>
        <!-- Include Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Your custom styles -->
        <style>
            /* Add your custom styles here */
            /* For example: */
            body,
            html,
            .bg-gray-100 {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #141414 !important;
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .bg-white {
                background-color: rgb(31 41 55 / var(--tw-bg-opacity));
                border-color: #2b2e33;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 40px 20px;
                text-align: center;
                width: 100%;
                height: 90vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            h1 {
                font-size: 3rem;
                margin-bottom: 20px;
                color: #4a5568;
            }

            p {
                font-size: 1.2rem;
                color: #718096;
            }

            .btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: #132a3d;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                margin-top: 1rem;
            }

            .btn:hover {
                background-color: #d3d0c5;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class='items'>
                <h1>404 - Page Not Found</h1>
                <p>The page you are looking for does not exist.</p>
                <a href="/" class="btn">Go to Homepage</a>
            </div>

        </div>
    </body>

</x-app-layout>
