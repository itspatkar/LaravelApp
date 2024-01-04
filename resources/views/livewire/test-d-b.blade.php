<div class="container m-5">
    <div class="container">
        <form wire:submit="save">
            <input type="name" wire:model="name" placeholder="Name">

            <input type="email" wire:model="email" placeholder="Email">

            <input type="mobile" wire:model="mobile" placeholder="Mobile">

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
