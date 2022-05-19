<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Edit </title>
</head>

<body>
    <x-navbar />


    <div class="flex  justify-center ">
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-10 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Blog</h1>
                </div>
                <form class="lg:w-1/2 md:w-2/3 mx-auto"  enctype="multipart/form-data" action="{{route('user.update')}}"
                method="POST"
                >
                    @csrf
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" value='{{ $user->name }}' name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" value='{{ $user->email }}' name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="role" class="leading-7 text-sm text-gray-600">Role</label>
                                <select   name="role"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value='{{ $user->Role }}' class="hidden" >{{ $user->Role }}</option>
                                    <option value="manager">manager</option>
                                    <option value="employee">employee</option>
                                    <option value="staff">staff</option>
                                </select>
                                </div>
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="image" class="leading-7 text-sm text-gray-600">image</label>
                                <input type="file" id="image" name="image"
                                    class="w-full px-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                            </div>
                        </div>

                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <br>

                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg"
                                type="submit">Update</button>
                        </div>

        </section>
    </div>
</body>

</html>
