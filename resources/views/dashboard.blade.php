<x-app-layout>
    <x-slot name="header">
        <x-header>
            {{ __('Dashboard') }}
        </x-header>
    </x-slot>
    <x-container>
        <x-form :action="route('question.store')">
            <x-textarea name="question" label="Your question"/>
            <x-button.primary>Save</x-button.primary>
            <x-button.reset>Cancel</x-button.reset>
        </x-form>
    </x-container>
</x-app-layout>
