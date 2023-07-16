<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="flex">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Produits') }}
                </h2>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-nav-link :href="route('produit-form')">
                    {{ __('+ Produits') }}
                </x-nav-link>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Eau</th>
                            <th>Fibres</th>
                            <th>Glucides</th>
                            <th>Protéines</th>
                            <th>Lipides</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produits as $produit)
                            <tr>
                                <td>{{$produit->name}}</td>
                                <td>{{$produit->eau}}</td>
                                <td>{{$produit->fibres}}</td>
                                <td>{{$produit->glucides}}</td>
                                <td>{{$produit->proteines}}</td>
                                <td>{{$produit->lipides}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
