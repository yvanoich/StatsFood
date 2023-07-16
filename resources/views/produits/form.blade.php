<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('produit-create') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Eau -->
            <div class="mt-4">
                <x-label for="eau" :value="__('Eau')" />

                <x-input id="eau" class="block mt-1 w-full" type="number" name="eau" :value="old('eau')" required />
            </div>

            <!-- Glucides -->
            <div class="mt-4">
                <x-label for="glucides" :value="__('Glucides')" />

                <x-input id="glucides" class="block mt-1 w-full" type="number" name="glucides" :value="old('glucides')" required />
            </div>

            <!-- Fibres -->
            <div class="mt-4">
                <x-label for="fibres" :value="__('Fibres')" />

                <x-input id="fibres" class="block mt-1 w-full" type="number" name="fibres" :value="old('fibres')" required />
            </div>

            <!-- Lipides -->
            <div class="mt-4">
                <x-label for="lipides" :value="__('Lipides')" />

                <x-input id="lipides" class="block mt-1 w-full" type="number" name="lipides" :value="old('lipides')" required />
            </div>

            <!-- Protéines -->
            <div class="mt-4">
                <x-label for="proteines" :value="__('Protéines')" />

                <x-input id="proteines" class="block mt-1 w-full" type="number" name="proteines" :value="old('proteines')" required />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('produits-listing') }}">
                    {{ __('Retour ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Enregistrer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
