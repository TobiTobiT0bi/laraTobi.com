@props(['heads', 'routeVariable', 'title'])

<h1 class='text-center p-3 pt-5 text-white'> {{ $title }}</h1>
<div class="rounded container bg-dark pb-3">
    <x-crud.crud-create-button :$routeVariable />

    <div class="container-sm">
        <table class="table table-dark">
            <thead class="table-dark">
                <tr class="text-center">
                    @foreach ($heads as $head)
                        <th>{{$head}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
