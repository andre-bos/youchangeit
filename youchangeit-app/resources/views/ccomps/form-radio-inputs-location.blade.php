<!-- Component Start -->
<form class="grid grid-cols-3 gap-2 w-full max-w-screen-sm" action="{{ route('petitions.create.step.one.post') }}" method="POST">
	@csrf
	<div>
		<input class="hidden peer" id="locale" type="radio" name="area_interesse" value="locale" {{ $formData === 'locale' ? 'checked' : '' }}>
		<label class="flex flex-col items-center p-4 border-2 border-gray-400 cursor-pointer peer-checked:border-green-700 peer-checked:shadow-lg" for="locale">
			<span class="text-xs font-semibold uppercase">Small</span>
			<span class="text-xl font-bold mt-2">$10/mo</span>
			<ul class="text-sm mt-2">
				<li>Thing 1</li>
				<li>Thing 2</li>
			</ul>
			</label>
	</div>
	<div>
		<input class="hidden peer" id="nazionale" type="radio" name="area_interesse" value="nazionale" {{ $formData === 'nazionale' ? 'checked' : '' }}>
		<label class="flex flex-col items-center p-4 border-2 border-gray-400 cursor-pointer peer-checked:border-green-700 peer-checked:shadow-lg" for="nazionale">
			<span class="text-xs font-semibold uppercase">Medium</span>
			<span class="text-xl font-bold mt-2">$40/mo</span>
			<ul class="text-sm mt-2">
				<li>Thing 1</li>
				<li>Thing 2</li>
			</ul>
		</label>
	</div>
	<div>
		<input class="hidden peer" id="globale" type="radio" name="area_interesse" value="globale" {{ $formData === 'globale' ? 'checked' : '' }}>
		<label class="flex flex-col items-center p-4 border-2 border-gray-400 cursor-pointer peer-checked:border-green-700 peer-checked:shadow-lg" for="globale">
			<span class="text-xs font-semibold uppercase">Big</span>
			<span class="text-xl font-bold mt-2">$100/mo</span>
			<ul class="text-sm mt-2">
				<li>Thing 1</li>
				<li>Thing 2</li>
			</ul>
		</label>
	</div>
	<button type="submit" class="col-start-3 justify-self-end mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Continua</button>
</form>
<!-- Component End  -->