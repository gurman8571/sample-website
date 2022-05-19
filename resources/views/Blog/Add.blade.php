<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Add a blog</title>

</head>
<body>
    <x-navbar/>
<div class="flex justify-center items-center">
 <h1 class="m-8 font-bold text-2xl">Add a blog</h1>

</div>
<div>
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-0 lg:pl-4">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Add a blog here </h3>
              <p class="mt-1 text-sm text-gray-600">
                This information will be displayed publicly so be careful what you share.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('blog.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="company_website" class="block text-sm font-medium text-gray-700">
                        Title
                      </label>
                      <div class="mt-1 flex rounded-md shadow-sm">

                        <input type="text" name="title" id="title" class="focus:ring-green-500 focus:border-green-500 flex-1 block w-full  rounded-md text-sm lg:text-lg p-2" value="{{old('title')}}" placeholder="xyz">

                      </div>

                      @error('title')
                      <span class="alert text-red-500  ">{{$message}}</span>
                      @enderror
                    </div>
                  </div>

                  <div>
                    <label for="desc" class="block text-sm font-medium text-gray-700">
                      Description
                    </label>
                    <div class="mt-1">
                      <textarea id="desc" name="desc" rows="4" class="shadow-sm border-green-500 mt-1 block w-full text-sm lg:text-lg p-2 rounded-md" placeholder="you@example.com">{{old('desc')}}</textarea>
                    </div>
                    @error('desc')
                    <span class="alert text-red-500  ">{{$message}}</span>
                    @enderror
                    <p class="mt-2 text-sm text-gray-500">
                      Description of your blog
                    </p>
                  </div>

                  <div>


                  </div>

                  <div>
                    <label class="block text-sm font-medium text-gray-700">
                      Cover photo
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="True">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">

                            <input id="image" name="image" type="file" >

                          </label>
                        </div>
                        <p class="text-xs text-gray-500">
                            @error('image')
                            <span class="alert text-red-500 ">{{$message}}</span>
                            @enderror
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
</body>
</html>
