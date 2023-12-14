<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Change Bootstrap Modal Content Based on Trigger Button Using JavaScript</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){
    var myModal = document.getElementById("myModal");

    myModal.addEventListener("show.bs.modal", function(event){        
        // Get the button that triggered the modal
        var button = event.relatedTarget;
        
        // Extract value from the custom data-* attribute
        var titleData = button.getAttribute("data-title");

        // Change modal title
        myModal.querySelector(".modal-title").innerText = titleData;
    });
});
</script>
</head>
<body>
<div class="m-4">
    <!-- Button HTML (to Trigger Modal) -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" data-title="Feedback">Feedback</button>
 

    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Modal Window</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">                        
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input class="form-control"></input>
                        </div>     
                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input class="form-control"></input>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Number:</label>
                            <input class="form-control"></input>
                        </div>               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>