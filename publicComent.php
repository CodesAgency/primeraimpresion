<div id="coments">
    <h4>User Name</h4>
    <h6>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt culpa iure ipsa cumque, id suscipit voluptatem, facere minus aliquam aliquid tenetur? Consectetur omnis cupiditate quo quisquam veniam in repellendus nemo.
    </h6>
    <button class="btn btn-primary mt-2 mb-2" id="responder">
        Responder
    </button>
    <script src="modalTextRequest.js"></script>
    <script>
        const responder = document.getElementById('responder');

        responder.addEventListener('click', showInputs)
        function showInputs(){
        create.createObject();
        }
    </script>
</div>