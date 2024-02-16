@include("Components/head")

@include("Components/navBar")

<div class="container" style="margin-top: 20px;">
    <h1>Search Result for: {{ $searchTerm }}</h1>
</div>

@include("Components/DisplayBooks")

@include("Components/footer")