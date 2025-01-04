@extends('layouts.tabler')

@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <div>
                    <h3 class="card-title">
                        {{ __('Category Details') }}
                    </h3>
                </div>
                <div class="card-actions">
                    <x-action.close route="{{ route('categories.index') }}" />
                </div>
            </div>
            <form method="POST" action="{{ route('categories.store') }}">
            @csrf
                <div class="card-body">
                    <livewire:name />

                    <livewire:slug />
                </div>
                <div class="col-md-6">

	  					<h3>Category List</h3>

				        <ul id="tree1">

				            @foreach($categories as $category)

				                <li>

				                    {{ $category->title }}

				                    @if(count($category->childs))

				                        @include('manageChild',['childs' => $category->childs])

				                    @endif

				                </li>

				            @endforeach

				        </ul>

	  				</div>

                <div class="card-footer text-end">
                    <x-button.save type="submit">
                        {{ __('Save') }}
                    </x-button.save>

                    <x-button.back route="{{ route('categories.index') }}">
                        {{ __('Cancel') }}
                    </x-button.back>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
