<x-app-layout>

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>

            <x-jet-validation-errors class="mb-4" />
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="col-sm-6">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <form method="POST" action="{{ url('/add_seller') }}">
                                    @csrf

                                    <div>
                                        <x-jet-label for="name" value="{{ __('name') }}" />
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>
                                    <div>
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </div>



                                    <div class="flex items-center justify-end mt-4">


                                        <x-jet-button class="ml-4">
                                            {{ __('add seller') }}
                                        </x-jet-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </x-jet-authentication-card>
    </x-guest-layout>

</x-app-layout>