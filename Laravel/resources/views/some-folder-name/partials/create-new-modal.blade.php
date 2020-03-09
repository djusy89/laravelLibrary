<div class="container" align="center">
    <h2>Insert new book</h2>
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        New Book
    </button>
    <!-- The Modal -->
    <div class="modal js_new_book_modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Enter the book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" class="js_new_book_form">
                        <div class="form-group">
                            <label for="tit">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="aut">Author:</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="gen">Select genre:</label>
                            <select class="form-control" id="genre" name="genre" required>
                                <option value="">Select genre</option>
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dtw">Date written:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="pub">Publisher:</label>
                            <input type="text" class="form-control" id="publisher" name="publisher" required>
                        </div>
                        <div class="form-group">
                            <label for="binf">About the book:</label>
                            <textarea name="bookInfo" class="form-control" rows="5" cols="10" required></textarea>
                        </div>
                        <a type="submit" class="btn btn-primary js_submit_new_book">Submit</a>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>