<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>403 - Forbidden</title>
        <!-- Include Tailwind CSS -->
        <!-- Your custom styles -->
        <style>
            /* Add your custom styles here */
            /* For example: */
            body,
            html {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #030303 !important;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 40px 20px;
                text-align: center;
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
                background-color: #3182ce;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>403 - Forbidden</h1>
            <p>You do not have appropriate access</p>
            <a href="/" class="btn">Go to Homepage</a>
        </div>
    </body>
</x-app-layout>
