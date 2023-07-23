<div>
    <form wire:submit.prevent="submit">
        @csrf
            <div>
                <div>
                    <input wire:model="name" type="text">
                </div>
            <x-button>送信する</x-button>
 
            @if (session()->has('message'))
            <div class="text-red-800">
                {{ session('message') }}
            </div>
            @endif
 
            </div>
    </form>
</div>
