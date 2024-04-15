<nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <x-navbar-logo />
                    <x-navbar-text text="YouChangeIT" />
                </a>
                <div class="flex items-center lg:order-2">
                    <x-navbar-button text="Accedi" link="/dashboard" />
                    <x-navbar-button text="Registrati" link="/register" />
                    <x-navbar-hamburger dataCollapseToggle="mobile-menu-2" ariaControls="mobile-menu-2" screenReaderText="Apri il menu" />
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <x-navbar-current-link text="Prova testo" link="https://g.co"/>
                        </li>
                        <li>
                            <x-navbar-link text="Nuovo link" link="https://www.tim.it" />
                        </li>
                    </ul>
                </div>
            </div>
        </nav>