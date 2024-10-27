<x-layout>

    <x-slot:heading>Jobs Details Page</x-slot:heading>
    <h1><strong>{{$greetings}}</strong> this is job details page</h1>
    <h2>{{$job['title']}}</h2>
    <p>Pays salary of {{$job['salary']}}</p>

</x-layout>