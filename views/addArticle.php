<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create an Article</h5>
                        <p class="card-text">Add a new article to the blog.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="catID" class="form-label">Category</label>
                            <input type="text" class="form-control mb-3" id="category" name="category" placeholder="Enter the Article Category" required>
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Enter the Article Title" required>
                            <label for="content" class="form-label">Content</label>
                            <input type="text" class="form-control mb-3" id="content" name="content" placeholder="Enter the Article Content" required>
                            <button type="submit" class="btn btn-primary">Post</button>
			</form>
		    </div>
                </div>      
            </div>
        </div>
    </div>
</body>
</html>
