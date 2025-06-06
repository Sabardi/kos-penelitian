<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-p">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Unavailable</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a"}
              }
            }
          }
        }
      </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="text-center">
            <div class="mb-8">
                <svg class="mx-auto h-24 w-24 text-primary-500"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">  
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />  
                    <line x1="12" y1="9" x2="12" y2="13" />  
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
            </div>
            <h1 class="text-6xl font-bold text-gray-800 dark:text-white">503</h1>
            <h2 class="text-3xl font-semibold text-gray-600 dark:text-gray-300 mb-4">Service Unavailable</h2>
            <p class="text-lg text-gray-500 dark:text-gray-400 mb-8">
                We're sorry, but the server is currently unavailable.
                <br>
                This may be due to maintenance or a temporary overload. Please try again later.
            </p>
            <p class="text-lg text-gray-500 dark:text-gray-400">
                (Situs sedang dalam perbaikan atau tidak tersedia saat ini)
            </p>
        </div>
    </div>
</body>
</html> 