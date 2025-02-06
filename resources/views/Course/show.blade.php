<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$course->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 row">
                <div class="card col-4">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h5>{{$course->name}}</h5>
                        <p class="underline">{{$course->description}}</p>
                        <p>{{$course->price}}</p>
                        <a class="btn btn-sm btn-primary" href="#">Add to cart</a>
                    </div>
                </div>

        </div>
    </div>
</x-app-layout>
