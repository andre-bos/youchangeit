<section class="pl-5 grid p-5 gap-4 md:grid-cols-3 grid-flow-row-dense">
    <x-h2-title text="Petizioni in corso" addClass="md:col-span-3" />
    @foreach ($petitions as $petition)
        <x-petition-card
            :decMakerNome="$petition->decMaker->nome"
            :decMakerCognome="$petition->decMaker->cognome"  
            :titolo="$petition->titolo" 
            :descrizione="$petition->descrizione" 
            :userNome="$petition->user->nome"
            :userCognome="$petition->user->cognome"
            :imgUrl="$petition->img_url"
        />
    @endforeach
    <div class="h-16 bg-blue-500"></div>
</section>