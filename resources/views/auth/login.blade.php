<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="d-flex justify-content-center">
        <x-application-logo />
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div>
                <div class="flex-col space-y-2 justify-center items-center">
                    <button id='loginButton' onclick="" class="mx-auto rounded-md p-2 bg-purple-500 text-white">
                      Login with MetaMask
                    </button>
                    <p id='userWallet' class='text-lg text-gray-600 my-2'></p>
                  </div>
            </div>
            <div>
                @if (Route::has('password.request'))
                <a class="me-3 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
            </div>

        </div>
    </form>


<script>
    window.userWalletAddress = null
    const loginButton = document.getElementById('loginButton')
    const userWallet = document.getElementById('userWallet')

    function toggleButton() {
      if (!window.ethereum) {
        loginButton.innerText = 'MetaMask is not installed'
        loginButton.classList.remove('bg-purple-500', 'text-white')
        loginButton.classList.add('bg-gray-500', 'text-gray-100', 'cursor-not-allowed')
        return false
      }

      loginButton.addEventListener('click', loginWithMetaMask)
    }

    async function loginWithMetaMask() {
      const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' })
        .catch((e) => {
          console.error(e.message)
          return
        })
      if (!accounts) { return }

      window.userWalletAddress = accounts[0]
      userWallet.innerText = window.userWalletAddress
      loginButton.innerText = 'Sign out of MetaMask'

      loginButton.removeEventListener('click', loginWithMetaMask)
      setTimeout(() => {
        loginButton.addEventListener('click', signOutOfMetaMask)
      }, 200)
    }

    function signOutOfMetaMask() {
      window.userWalletAddress = null
      userWallet.innerText = ''
      loginButton.innerText = 'Sign in with MetaMask'

      loginButton.removeEventListener('click', signOutOfMetaMask)
      setTimeout(() => {
        loginButton.addEventListener('click', loginWithMetaMask)
      }, 200)
    }

    window.addEventListener('DOMContentLoaded', () => {
      toggleButton()
    });
  </script>

</x-guest-layout>
