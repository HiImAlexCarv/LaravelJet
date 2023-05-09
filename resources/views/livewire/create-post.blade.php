<div>
    <x-danger-button wire:click="$set('open',true)">
        Crear nuevo Post
    </x-danger-button>


    <x-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear nuevo Post

            <div class="mb-4">
                <x-label aria-valuemax="Titulo del Post"></x-label>
                <x-input type="text" class="w-full" wire:model="title"></x-input>

                <x-input-error for='title'></x-input-error>


            </div>

        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label value="Contenido del Post"></x-label>
                <textarea rows="6" class="form-control w-full" wire:model.defer="content"></textarea>

                <x-input-error for='content'></x-input-error>


            </div>

        </x-slot>

        <x-slot name="footer">
            <x-danger-button wire:click="$set('open',false)">
                cancelar
            </x-danger-button>

            <x-danger-button wire:click="save">
                Crear
            </x-danger-button>


        </x-slot>

    </x-dialog-modal>
</div>
