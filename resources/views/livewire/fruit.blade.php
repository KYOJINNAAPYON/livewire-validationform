<div>
    <form wire:submit.prevent="submit">
        @csrf
            <div>
                <div>
                    <input wire:model="name" type="text">
                </div>
            <button>送信する</button>

            @if (session()->has('message'))
            <div class="text-red-800">
                {{ session('message') }}
            </div>
            @endif
 
            </div>
    </form>
</div>
