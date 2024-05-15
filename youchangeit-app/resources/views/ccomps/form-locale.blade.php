<!-- Component Start -->
<form action="{{ route('petitions.create.step.one.post') }}" method="POST">
	@csrf
	<select class="country mr-5" aria-label="Seleziona nazione">
        <option selected>Seleziona nazione</option>
    </select>

    <select class="state mr-5" aria-label="Seleziona stato/regione">
         <option selected>Seleziona stato/regione</option>
    </select>

    <select class="city mr-5" aria-label="Seleziona città">
        <option selected>Seleziona città</option>
    </select>     
	<button type="submit" class="ml-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Continua</button>
</form>

<script>

var countrySelector = document.querySelector('.country')
var stateRegionSelector = document.querySelector('.state')
var citySelector = document.querySelector('.city')

countrySelector.addEventListener('change', loadStates)
stateRegionSelector.addEventListener('change', loadCities)

function loadCountries() {

    fetch('/api/countries')
    .then(Response => Response.json()).then(data => {
        data.forEach(country => {
           const option = document.createElement('option')
           option.value = country.iso2
           option.textContent = country.name
           countrySelector.appendChild(option) 
        });
    }).catch(err => console.error(err))

    stateRegionSelector.disabled = true
    citySelector.disabled = true

    stateRegionSelector.style.pointerEvents = 'none'
    citySelector.style.pointerEvents = 'none'
}

function loadStates() {
    stateRegionSelector.disabled = false
    citySelector.disabled = true

    stateRegionSelector.style.pointerEvents = 'auto'
    citySelector.style.pointerEvents = 'none'

    const selectedCountryCode = countrySelector.value
    stateRegionSelector.innerHTML = '<option value="">Seleziona stato/regione</option>'

    fetch(`/api/countries/${selectedCountryCode}/states`).then(Response => Response.json()).then(data => {
        data.forEach(stateRegion => {
            const option = document.createElement('option')
            option.value = stateRegion.iso2
            option.textContent = stateRegion.name
            stateRegionSelector.appendChild(option)
        })
    })
}

function loadCities() {
    
    citySelector.disabled = false
    citySelector.style.pointerEvents = 'auto'

    const selectedCountryCode = countrySelector.value
    const selectedStateRegionCode = stateRegionSelector.value
    citySelector.innerHTML = '<option value="">Seleziona città</option>'

    fetch(`/api/countries/${selectedCountryCode}/states/${selectedStateRegionCode}/cities`)
    .then(Response => Response.json())
    .then(data => {
        data.forEach(city => {
            const option = document.createElement('option')
            option.value = city.iso2
            option.textContent = city.name
            citySelector.appendChild(option)
        })
    })
}

document.addEventListener('DOMContentLoaded', loadCountries)
</script>
<!-- Component End  -->