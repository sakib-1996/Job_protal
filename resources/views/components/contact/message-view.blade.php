<div class="modal animated zoomIn" id="view-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <!-- Add the "modal-md" class for medium-sized modal, you can adjust it based on your needs -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Message</h5>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="container">
                    <div class="row">
                        <div class="col-12 p-1">
                            <label class="form-label">User Name</label>
                            <p id="userName"></p>

                            <label class="form-label">User Email</label>
                            <p id="userEmail"></p>

                            <label class="form-label">User Mobile</label>
                            <p id="userMobile"></p>

                            <label class="form-label">Subject</label>
                            <p class="" id="subject"></p>

                            <label class="form-label">Comment</label>
                            <p id="comment"></p>

                            <input class="d-none" id="viewID">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeViewModal()">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function closeViewModal() {
            var viewModal = document.getElementById('view-modal');
            viewModal.style.display = 'none';
        }
        async function FillUpviewForm(id) {
            document.getElementById('viewID').value = id;

            try {
                let res = await axios.get(`/messageView/${id}`);

                if (res.data.success) {
                    const messageData = res.data.data;

                    // Display data in the HTML elements
                    document.getElementById('userName').innerHTML = messageData.name;
                    document.getElementById('userEmail').innerHTML = messageData.email;
                    document.getElementById('userMobile').innerHTML = messageData.mobile;
                    document.getElementById('subject').innerHTML = messageData.subject;
                    document.getElementById('comment').innerHTML = messageData.message;

                } else {
                    console.error('Error: ' + res.data.message);
                }
            } catch (error) {
                console.error(error);
            }
        }
    </script>
