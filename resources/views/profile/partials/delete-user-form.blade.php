<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Deletar conta.') }}
        </h2>

        <p class="mt-1 text-sm text-gray-400">
            {{ __('Por uma vez que sua conta é deletada, todo conteudo armazenado será deletado permanentemente. Antes de deletar sua conta, por favor salve as informações que você deseja permanecer.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Deletar conta') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Você tem certeza de que deseja apagar a conta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Uma vez que a conta for deletada, todo o seu conteúdo será deletado permanentemente. Por favor re-digite sua senha se deseja realmente deletar a sua conta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Deletar conta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
