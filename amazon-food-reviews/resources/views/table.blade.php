
<table border="1">
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