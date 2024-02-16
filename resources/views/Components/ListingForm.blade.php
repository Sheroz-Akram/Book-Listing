<div class="container" style="margin-top: 50px;margin-bottom: 30px;">
    <h3>List a New Book</h3>
    <p>Please fill the form below to list your book in our website. Make sure you enter correct details. </p>
    @if(isset($status))
        <div class="alert alert-{{ $type }}" role="alert">
            {{ $status }}
        </div>
    @endif
    <form class="row g-3" action="SubmitPost" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="bookTitle" class="form-label">Title</label>
            <input type="text" name="bookTitle" placeholder="A Sample Book" class="form-control" id="bookTitle"
                required>
        </div>
        <div class="col-md-6">
            <label for="bookAuthor" class="form-label">Author</label>
            <input type="text" name="bookAuthor" placeholder="John Doe and Jane Smith" class="form-control"
                id="bookAuthor" required>
        </div>
        <div class="col-md-6">
            <label for="bookPublisher" class="form-label">Publisher</label>
            <input type="text" name="bookPublisher" placeholder="Sample Publishing House" class="form-control"
                id="bookPublisher" required>
        </div>
        <div class="col-md-6">
            <label for="bookPublishDate" class="form-label">Publish Date</label>
            <input type="date" name="bookPublishDate" class="form-control" id="bookPublistDate" required>
        </div>
        <div class="col-md-6">
            <label for="bookLanguage" class="form-label">Language</label>
            <input type="text" name="bookLanguage" placeholder="English" class="form-control" id="bookLanguage"
                required>
        </div>
        <div class="col-md-6">
            <label for="bookPageCount" class="form-label">Page Count</label>
            <input type="number" name="bookPageCount" placeholder="0" class="form-control" id="bookPageCount" required>
        </div>
        <div class="col-12">
            <label for="coverImage" class="form-label">Book Cover Image</label>
            <input type="file" accept="image/png, image/jpeg" name="coverImage" class="form-control" id="coverImage"
                required>
        </div>
        <div class="col-6">
            <label for="bookPrice" class="form-label">Price (RS)</label>
            <input type="number" class="form-control" name="bookPrice" placeholder="1200" required />
        </div>
        <div class="col-6">
            <label for="bookCondition" class="form-label">Condition</label>
            <select id="inputState" name="bookCondition" class="form-select" required>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="userEmail" placeholder="joe@example.cm" id="userEmail" required>
        </div>
        <div class="col-md-6">
            <label for="userPhone" class="form-label">Phone</label>
            <input type="tel" class="form-control" name="userPhone" placeholder="XX-XXXXXX-XX" id="userPhone" required>
        </div>
        <div class="col-md-6">
            <label for="userCity" class="form-label">City</label>
            <input type="text" class="form-control" name="userCity" id="userCity" placeholder="Lahore" required>
        </div>
        <div class="col-md-4">
            <label for="userState" class="form-label">State</label>
            <input type="text" class="form-control" name="userState" id="userState" placeholder="Punjab" required>
        </div>
        <div class="col-md-2">
            <label for="userZip" class="form-label">Zip</label>
            <input type="text" class="form-control" name="userZip" id="userZip" placeholder="54850" required>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Place Post</button>
        </div>
    </form>
</div>