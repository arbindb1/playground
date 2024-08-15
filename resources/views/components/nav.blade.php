<div class="h-16 border-b-2 flex item-center bg-white ">
   <div class="h-full flex-1 flex justify-center"><a class=" text-center px-4 py-2  hover:border-b-2 hover:border-gray-200 {{ Route::currentRouteName() == 'faculty.homepage' ? 'border-b-2 border-purple-500' : ''}}" href="{{ $homeroute }}">Home</a></div>
   <div class=" h-full flex-1 flex justify-center"> <a class="text-center px-4 py-2 hover:border-b-2 hover:border-gray-200  {{ Route::currentRouteName() == 'faculty.list' ? 'border-b-2 border-purple-500' : '' }}" href="{{ $sdroute }}">Faculty Details</a></div>
   <div class="h-full flex-1 flex justify-center">  <a class="text-center px-4 py-2 hover:border-b-2 hover:border-gray-200  {{ Route::currentRouteName() == 'student.list' ? 'border-b-2 border-purple-500' : ''}}" href="{{ $stroute }}">Student Details</a></div>
   <div class="h-full flex-1 flex justify-center">  <a class="text-center px-4 py-2 hover:border-b-2 hover:border-gray-200  {{ Route::currentRouteName() == 'trash' ? 'border-b-2 border-purple-500' : '' }}" href="{{ $trash }}">Trash</a></div>
</div>
