<div class="flex">
    <img src="{{ auth()->user()->img_url }}" alt="Avatar di {{ auth()->user()->nome }}" class="h-[50px] w-[50px] object-cover rounded-full inline-block justify-self-start self-start">
    <span class="self-center ml-3 font-bold text-xs"><a href="/dashboard">{{ auth()->user()->nome }} {{ auth()->user()->cognome }}</a></span>
</div>