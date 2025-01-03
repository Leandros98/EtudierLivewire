<div>
    <h1>&#128161; {{ $brightness }} %</h1>
    <div class="progress" role="progressbar" 
         aria-label="Warning example" 
         aria-valuenow="{{ $brightness }}" 
         aria-valuemin="0" 
         aria-valuemax="100">
        <div class="progress-bar bg-warning text-dark" 
             style="width: {{ $brightness }}%;">
            {{ $brightness }}%
        </div>
    </div>
    <div class="mt-3">
        <button class="btn btn-danger" wire:click="off">OFF</button>
        <button class="btn btn-secondary" wire:click="increment">+</button>
        <button class="btn btn-secondary" wire:click="decrement">-</button>
        <button class="btn btn-primary" wire:click="on">ON</button>
    </div>
</div>
