<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Statistiques') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div style="display: flex; flex-direction: row;">
                       <div style=" flex-basis: 100%; margin-right: 20px;">
                           
                       </div>
                       <div style="flex-basis: 100%; border-left: solid black 1px;">
                           <div style="margin-left: 10px; margin-bottom: 20px;">
                               <label style="font-size: 20px;">Petit déjeuner :</label><br/>
                               <div style="width: 30px; height: 30px; text-align: center; margin: auto; border: 1px solid black; font-size: 20px; border-radius: 20%;">
                                   <a>+</a>
                               </div>
                           </div>
                           <hr>
                           <div style="margin-left: 10px; margin-bottom: 20px;">
                               <label style="font-size: 20px;">Déjeuner</label><br/>
                               <div style="width: 30px; height: 30px; text-align: center; margin: auto; border: 1px solid black; font-size: 20px; border-radius: 20%;">
                                   <a>+</a>
                               </div>
                           </div>
                           <hr>
                           <div style="margin-left: 10px; margin-bottom: 20px;">
                               <label style="font-size: 20px;">Dîner</label><br/>
                               <div style="width: 30px; height: 30px; text-align: center; margin: auto; border: 1px solid black; font-size: 20px; border-radius: 20%;">
                                   <a>+</a>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
