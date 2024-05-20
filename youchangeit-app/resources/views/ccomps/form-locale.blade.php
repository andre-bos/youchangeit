<!-- Component Start -->
<form action="{{ route('petitions.create.step.one.post') }}" class="grid grid-cols-3 gap-2 w-full max-w-screen-sm" method="POST">
	@csrf
	<div class="select-box">

        <div class="select-input relative w-full mb-1">
            <input class="country bg-white text-black rounded-lg cursor-pointer w-full focus:border-none focus:outline-green-700 focus:ring-0" type="text" name="" id="soValue" readonly placeholder="Nazione"><span class="absolute top-1/2 transform -translate-y-1/2 left-44 select-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></span>
        </div>

        <div class="content relative text-black border border-t-0 rounded-lg border-black w-full hidden">
            <input class="w-full border-2 border-t-0 rounded-t-lg border-x-0 focus:border-green-700 focus:border-t-0 focus:border-x-0 focus:outline-none focus:ring-0" type="text" name="" id="optionSearch" placeholder="Cerca nazione">

            <ul class="options flex flex-col">
               <li class="pl-2 py-2.5 hover:bg-green-200">HTML 5</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">CSS 3</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Jascript</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">React</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">PHP</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Laravel</li> 
            </ul>
        </div>
    </div>
    
    <div class="select-box">

        <div class="select-input relative w-full mb-1">
            <input class="bg-white text-black rounded-lg cursor-pointer w-full focus:border-none focus:outline-green-700 focus:ring-0" type="text" name="" id="soValue" readonly placeholder="Stato/regione"><span class="absolute top-1/2 transform -translate-y-1/2 left-44 select-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></span>
        </div>

        <div class="content relative text-black border border-t-0 rounded-lg border-black w-full hidden">
            <input class="w-full border-2 border-t-0 rounded-t-lg border-x-0 focus:border-green-700 focus:border-t-0 focus:border-x-0 focus:outline-none focus:ring-0" type="text" name="" id="optionSearch" placeholder="Cerca stato/regione">

            <ul class="options flex flex-col">
               <li class="pl-2 py-2.5 hover:bg-green-200">HTML 5</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">CSS 3</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Jascript</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">React</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">PHP</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Laravel</li> 
            </ul>
        </div>
    </div>

    <div class="select-box">

        <div class="select-input relative w-full mb-1">
            <input class="bg-white text-black rounded-lg cursor-pointer w-full focus:border-none focus:outline-green-700 focus:ring-0" type="text" name="" id="soValue" readonly placeholder="Città"><span class="absolute top-1/2 transform -translate-y-1/2 left-44 select-arrow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg></span>
        </div>

        <div class="content relative text-black border border-t-0 rounded-lg border-black w-full hidden">
            <input class="w-full border-2 border-t-0 rounded-t-lg border-x-0 focus:border-green-700 focus:border-t-0 focus:border-x-0 focus:outline-none focus:ring-0" type="text" name="" id="optionSearch" placeholder="Cerca città">

            <ul class="options flex flex-col">
               <li class="pl-2 py-2.5 hover:bg-green-200">HTML 5</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">CSS 3</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Jascript</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">React</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">PHP</li>
               <li class="pl-2 py-2.5 hover:bg-green-200">Laravel</li> 
            </ul>
        </div>
    </div>
	<button type="submit" class="ml-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Continua</button>
</form>

<script>
    const selectInputs = document.querySelectorAll('.select-input');
    const selectInputFields = document.querySelectorAll('.select-input input');
    const selectArrows = document.querySelectorAll('.select-arrow');
    const contents = document.querySelectorAll('.content');
    const optionsLists = document.querySelectorAll('.options');

    document.addEventListener('DOMContentLoaded', () => {
        toggleDropdownContent();
        loadCountries();
    });

    function toggleDropdownContent() {
        selectInputs.forEach((selectInput, index) => {
            selectInput.addEventListener('click', (event) => {
                const parent = event.target.closest('.select-box');
                const content = parent.querySelector('.content');
                const selectArrow = selectArrows[index];
                const optionsListItems = parent.querySelectorAll('.options li');

                // Apro o chiudo il dropdown corrente al click del selectInput
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    selectArrow.classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    selectArrow.classList.remove('rotate-180');
                }

                // Chiudo tutti i dropdown eccetto quello appena cliccato
                contents.forEach((content, contentIndex) => {
                    if (contentIndex !== index) {
                        content.classList.add('hidden');
                        selectArrows[contentIndex].classList.remove('rotate-180');
                    }
                });

                // Aggiungi un gestore di eventi click a ciascun elemento <li>
                optionsListItems.forEach((item) => {
                    item.addEventListener('click', () => {
                        content.classList.add('hidden');
                        selectArrow.classList.remove('rotate-180');
                    });
                });
            });

            /* document.addEventListener('click', (e) => {
                if (!parent.contains(e.target)) {
                    contents.forEach((content, index) => {
                        content.classList.add('hidden');
                        selectArrows[index].classList.remove('rotate-180');
                    });
                }
            }); */
        });
    }

    function enableInput(input, enabled = false) {
        if (!enabled) {
            input.disabled = true;
            input.style.pointerEvents = 'none';
            input.firstElementChild.classList.add('bg-gray-200');
            console.log(input.firstElementChild)
        } else {
            input.disabled = false;
            input.style.pointerEvents = 'auto';
            input.firstElementChild.classList.remove('bg-gray-200');
            console.log(input.firstElementChild)
        }
    }

    function handleOptionsClick() {
        optionsLists.forEach((optionsList) => {
            optionsList.addEventListener('click', (e) => {
                const parent = e.target.closest('.select-box');
                const targetedInputField = parent.querySelector('input');
                const targetedInput = targetedInputField.closest('.select-input');
                targetedInputField.value = e.target.textContent;
                const optionsListItems = parent.querySelectorAll('.options li');

                if (targetedInput === selectInputs.item(0)) {
                    loadStatesRegions();
                } else if (targetedInput === selectInputs.item(1)) {
                    loadCities();
                }
            });
        });
    }

    function loadCountries() {
        let isDataFetched = false;
        enableInput(selectInputs.item(1), false);
        enableInput(selectInputs.item(2), false);

        selectInputs.item(0).addEventListener('click', () => {
            handleOptionsClick();

            if (!isDataFetched) {
                // fetchData();
                console.log('Dati Countries recuperati');
                isDataFetched = true;
            }
        });
    }

    function loadStatesRegions() {
        enableInput(selectInputs.item(1), true);
        handleOptionsClick();

        // fetchData();
        console.log('Dati loadStatesRegions() recuperati');
    }

    function loadCities() {
        enableInput(selectInputs.item(2), true);

        // fetchData();
        console.log('Dati loadCities() recuperati');
    }

    // Funzione per recuperare i dati
    async function fetchData(typedCountry = '') {
        try {
            let url = 'https://api.countrystatecity.in/v1/countries';
            if (typedCountry) {
                // url += `?limit=10&namePrefix=${typedCountry}`;
            }
            const response = await fetch(url, {
                headers: {
                    'X-CSCAPI-KEY': 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA==',
                }
            });
            const countries = await response.json();
            console.log(countries);
        } catch (err) {
            console.error(err);
        }
    }

</script>

<!-- Component End  -->