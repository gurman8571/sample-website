
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <x-navbar/>
    <x-alerts/>
<h1 class="flex justify-center mt-8 text-2xl font-bold">User's data</h1>
<div class="flex justify-center mt-8">

<table class="w-1/2 shadow-md border-1 border-green-500  text-sm text-left text-gray-500 ">
    <thead class="text-xs text-white uppercase bg-green-400 ">
        <tr>
            <th scope="col" class="p-4">
             Image
            </th>
            <th scope="col" class="px-6 py-3">
             name
            </th>
            <th scope="col" class="px-6 py-3">
                email
            </th>
            <th scope="col" class="px-6 py-3">
                status
            </th>
            <th scope="col" class="px-6 py-3">
                status
            </th>
            <th scope="col" class="px-6 py-3">
                edit
            </th>
            <th scope="col" class="px-6 py-3">
               delete
            </th>
            <th scope="col" class="px-6 py-3">
                change status
             </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr
            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="w-full p-4">
                <img src="
                {{asset('profile')}}/{{$item->Profile_image}}
                " alt="">
            </td>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                {{$item->name}}
            </th>
            <td class="px-6 py-4">
                {{$item->email}}
            </td>

            <td class="px-6 py-4">
           {{$item->Role}}
            </td>

            <td class="px-6 py-4">
                {{$item->status?
               'active'
                     :'inacitve' }}
             </td>
             <td class="px-6 py-4 pointer-cursor ">
                <a href={{route('user.edit',['id' => $item->id])}}><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                  </svg>
                </a>
             </td>
             <td class="px-6 py-4 pointer-cursor">
                <a href={{route('user.delete',['id' => $item->id])}}>  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </a>



             </td>
             <td class="px-6 py-4 pointer-cursor text-blue-500">

                <a href={{route('user.status',['id' => $item->id])}} >change status</a>



             </td>


        </tr>
        @endforeach
    </tbody>

</table>
</div>
</body>
</html>
