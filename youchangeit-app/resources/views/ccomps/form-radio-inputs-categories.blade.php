<form action="{{ route('petitions.create.step.two.post') }}" method="POST" class="flex flex-wrap mt-10 w-[50%] justify-end">
    @csrf
    <div class="flex flex-wrap">
        @foreach($categories as $category)
            <x-category-tag :category="$category" :formData="$formData" />   
        @endforeach
    </div>

    <button type="submit" class="col-start-3 justify-self-end mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Continua</button>
</form>