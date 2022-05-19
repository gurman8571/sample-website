<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <x-navbar/>
    <!--- alerts-->
        <x-alerts/>
    <div class="flex justify-center items-center ">
         <h1 class="text-3xl font-bold mt-8 ">

             Posts
         </h1>


    </div>
    @foreach ($data as $item)
    <section class="text-gray-600 body-font m-6">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg  md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-fit rounded-md" alt="hero" src="{{asset('blogs')}}/{{$item->image}}">
          </div>
          <div>
              <h1>{{$item->status}}</h1>
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$item->title}}
                @if($item->status == 1)
                <span class=" text-sm bg-green-200 p-2 text-green-500 rounded-md mx-2 ">
                active
                </span>
                @else
                <span class=" text-sm bg-red-200 p-2 text-red-500 rounded-md mx-2 ">
                    inactive
                    </span>
                @endif

            </h1>

            <p class="mb-8 leading-relaxed">{{$item->desc}}</p>
            <div class="flex justify-center">
              <a href={{route('blog.edit',['id' => $item->id])}} class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">edit</a>
              <a href={{route('blog.delete',['id' => $item->id])}} class="ml-4 inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Delete</a>
              <a href={{route('blog.status',['id' => $item->id])}} class="ml-4 inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">change status</a>

                </div>
          </div>
        </div>
      </section>
    @endforeach
</body>
</html>


