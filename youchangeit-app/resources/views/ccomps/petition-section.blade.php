<section class="pl-5 grid p-5 gap-4 md:grid-cols-3">
    <x-h2-title text="Petizioni in corso" addClass="md:col-span-3" />
    @foreach ($petitions as $petition)
        <x-petition-card
            :decMaker="$petition->dec_maker_id" 
            :titolo="$petition->titolo" 
            :descrizione="$petition->descrizione" 
            :userId="$petition->user_id"
            :imgUrl="$petition->img_url"
        />
    @endforeach
    <div class="h-16 bg-blue-500"></div>
</section>