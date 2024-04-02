<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="/font-awesome/css/all.css" rel="stylesheet" />
        <link href="/font-awesome/css/sharp-solid.css" rel="stylesheet" />
        <link href="/font-awesome/css/sharp-regular.css" rel="stylesheet" />
        <link href="/font-awesome/css/sharp-light.css" rel="stylesheet" />
        <title>Product</title>
    </head>
    <body>
        <div class="p-4">
            <div class="flex flex-row justify-end items-center mb-2">
                <p class="">EN</p>
            </div>
            <div class="grid grid-cols-5 gap-2 w-full">
                @foreach($models as $model)
                <div class="card shadow p-2 w-full rounded-lg">
                    @if ($model->image != null)
                    <img src="/image/{{ $model->image }}" class="w-full rounded"/>
                    @else
                    <img src="/image/placeholder.webp" class="w-full rounded" />
                    @endif
                    <div class="p-2">
                        <p class="card-title text-lg">{{ $model->name }}</p>
                        <p class="card-text"></p>
                        <div class="flex flex-row justify-between items-center">
                          <button class="btn"><i class="fa-solid fa-minus"></i></button>
                          <input type="number" value="0" class="input input-bordered w-[60px]" />
                          <button class="btn"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
