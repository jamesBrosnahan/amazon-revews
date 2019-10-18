@extends('index')

@section('content')
<style>
table {
    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
    width: 90%;
    text-align:center;
    align:center;
}

td, th {
    border-left:solid black 1px;
    border-top:solid black 1px;
}

th {
    background-color: blue;
    border-top: none;
}

td:first-child, th:first-child {
     border-left: none;
}
</style>
<table style="border: black 1px; background-image: url('images/Grunge_Texture.jpg');background-width: 100%;">
    <thead>
        <td>ID</td>
        <td>ProductID</td>
        <td>User ID</td>
        <td>Profile Name</td>
        <td>Helpfulness Score</td>
        <td>Score</td>
        <td>Time</td>
        <td>Summary</td>
        <td>Text</td>
    </thead>
    <tbody>
@foreach ($reviews as $review)
    <tr>
        <td>{{ $review->Id }}</td>
        <td>{{ $review->ProductId }}</td>
        <td>{{ $review->UserId }}</td>
        <td>{{ $review->ProfileName }}</td>
        <td>{{ $review->HelpfulnessNumerator }} / {{ $review->HelpfulnessDenominator }}</td>
        <td>{{ $review->Score }}</td>
        <td>{{ $review->Time }}</td>
        <td>{{ $review->Summary }}</td>
        <td>{{ $review->Text }}</td>
    </tr>
@endforeach
</tbody>
</table>
@endsection