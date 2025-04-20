<div>
    <div class="flex flex-col space-y-4 max-w-sm mx-auto p-4">
        <label for="name" class="text-gray-700 font-medium">Nome</label>
        <input 
            wire:model="name"
            id="name" 
            name="name" 
            type="text" 
            placeholder="Digite seu nome"
            class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <button 
            wire:click="addNamesInArray"
            type="submit"
            class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            Salvar
        </button>
    </div>
    <ul class="list-disc list-inside text-gray-800 p-2">
        @foreach($names as $name)
            <li>{{$name}}</li>
        @endforeach
    </ul>
</div>
