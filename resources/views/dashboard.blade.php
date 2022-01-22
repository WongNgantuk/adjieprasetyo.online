<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row mt-3">
          <div class="col text-center">
                <form action="{{ route('posts.index') }}">
                            <x-jet-button class="ml-4">
                                {{ __('View Project') }}
                            </x-jet-button>
                </form>
            </div>  
        </div> 

        <div class="row mt-3">
          <div class="col text-center">
                <form action="{{ url('/') }}">
                            <x-jet-button class="ml-4">
                                {{ __('Home') }}
                            </x-jet-button>
                </form>
            </div>  
        </div> 
        
    </div> 
</x-app-layout>
