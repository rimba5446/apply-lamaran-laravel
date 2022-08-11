<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>


            <div class="card-body">
            <div class="row">
              <div class="mt-4">
              <x-jet-label for="jabatan" value="{{ __('Jabatan') }}" />
                <div class="form-group">
                  <select id="jabatan" class="block mt-1 w-full" type="jabatan" name="jabatan" :value="old('jabatan')" required>
                    <option selected="selected">Pilih Jabatan</option>
                    <option>Backend Junior Developer</option>
                    <option>Fullstack Junior Web Developer</option>
                    <option>Frontend Junior Developer</option>
                  </select>
                </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="telephone" value="{{ __('Telephone') }}" />
                <x-jet-input id="telephone" class="block mt-1 w-full" type="telephone" name="telephone" :value="old('telephone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="card-body">
            <div class="row">
              <div class="mt-4">
              <x-jet-label for="tahun" value="{{ __('Tahun Lahir') }}" />
                <div class="form-group">
                  <select id="tahun" class="block mt-1 w-full" type="tahun" name="tahun" :value="old('tahun')" required>
                    <option selected="selected">Pilih Tahun</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2022</option>
                  </select>
                </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    <!-- {{ __('Already registered?') }} -->
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Lamar Sekarang') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
