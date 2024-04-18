<section class="grid gap-x-6 gap-y-8 md:grid-cols-3 md:grid-flow-row-dense relative top-0 left-0 right-0 w-9/10 md:w-3/4 py-10 mx-auto">
    <x-h2-title text="Petizioni in corso" addClass="md:col-span-3" />
            @foreach ($petitions as $petition)
                <x-petition-card
                    :decMakerNome="$petition->decMaker->nome"
                    :decMakerCognome="$petition->decMaker->cognome"  
                    :petitionId="$petition->id"
                    :titolo="$petition->titolo" 
                    :descrizione="$petition->descrizione" 
                    :userNome="$petition->user->nome"
                    :userCognome="$petition->user->cognome"
                    :imgPetition="$petition->img_url"
                    :imgAutore="$petition->user->img_url"
                    :contoFirme="$petition->signatures_count"
                    :categoria="$petition->category->nome"
                />
            @endforeach        
    <div class="h-16 bg-blue-500 sticky self-start top-24 flex flex-col">
        <h4>Titolo</h4>
        <p>Tags</p>
    </div>
</section>