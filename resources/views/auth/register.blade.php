<x-guest-layout>

    <div class="my-3">
        <div class="d-flex justify-content-center">
            <x-application-logo />
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- UserName -->
                    <div class="mt-4">
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                            :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Country -->
                    <div class="mt-4">
                        <x-input-label for="country" :value="__('Country')" />
                        <x-text-input id="country" class="block mt-1 w-full" type="text" name="country"
                            :value="old('country')" required autocomplete="country" />
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Refer Code -->
                    <div class="mt-4">
                        <x-input-label for="refercode" :value="__('Refer Code')" />
                        <x-text-input id="refercode" class="block mt-1 w-full" type="number" name="refercode"
                            :value="old('refercode')" required autocomplete="refercode" />
                        <x-input-error :messages="$errors->get('refercode')" class="mt-2" />
                    </div>

                </div>
                <div class="col-12 col-md-6">
                </div>
            </div>


            <!-- Address -->
            <div class="mt-4">
                <x-input-label for="addr1" :value="__('Address Line 1')" />
                <x-text-input id="addr1" class="block mt-1 w-full" type="text" name="addr1" :value="old('addr1')"
                    required autocomplete="addr1" />
                <x-input-error :messages="$errors->get('addr1')" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-input-label for="addr2" :value="__('Address Line 2')" />
                <x-text-input id="addr2" class="block mt-1 w-full" type="text" name="addr2" :value="old('addr2')"
                    autocomplete="addr2" />
                <x-input-error :messages="$errors->get('addr2')" class="mt-2" />
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- City -->
                    <div class="mt-4">
                        <x-input-label for="city" :value="__('City')" />
                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city"
                            :value="old('city')" required autocomplete="city" />
                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <!-- State -->
                    <div class="mt-4">
                        <x-input-label for="state" :value="__('State')" />
                        <x-text-input id="state" class="block mt-1 w-full" type="text" name="state"
                            :value="old('state')" required autocomplete="state" />
                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Postal -->
                    <div class="mt-4">
                        <x-input-label for="postal" :value="__('Postal')" />
                        <x-text-input id="postal" class="block mt-1 w-full" type="number" name="postal"
                            :value="old('postal')" required autocomplete="postal" />
                        <x-input-error :messages="$errors->get('postal')" class="mt-2" />
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <!-- Birthday -->

                    <div class="mt-4">
                        <x-input-label for="bday" :value="__('Birthday')" />
                        <x-text-input id="bday" class="block mt-1 w-full" placeholder="DD/MM/YYYY" type="date"
                            name="bday" :value="old('bday')" required autocomplete="bday" />
                        <x-input-error :messages="$errors->get('bday')" class="mt-2" />
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-12">
                    <!-- phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                </div>

            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="me-3underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
