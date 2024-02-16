<div class="container" style="margin-top: 30px;margin-bottom: 30px;">
    <!-- Display All the books records -->
    <div class="row">
        @forelse ($books as $key=>$data)
        <div class="card m-3" style="width: 18rem;">
            <img src="uploads/{{ $data->coverImage}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $data->bookTitle }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $data->bookAuthor }}</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div>
        @empty
        <h1>No Books Data Found. Database is empty. 😢😢</h1>
        @endforelse
    </div>
</div>