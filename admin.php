
<?php include 'header.php';?>
    <div class="container border rounded p-4">
        <h2 class="heading mb-3">Axiom Corp Generate Promissory Note URL</h2>
        <form id="form">
            <div class="mb-3">
                <label for="brand" class="form-label">Brand Name</label>
               <input type="text" name="brandName" class="form-control" id="brand" placeholder="brand name">
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Executive Sales Consultant</label>
               <input type="text" name="escName" class="form-control" id="esc" placeholder="Executive Sales Consultant">
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Proposal Date</label>
               <input type="date" name="proposalDate" class="form-control" id="esc" placeholder="">
            </div>

            <div class="mb-3">
                <label for="customer" class="form-label">Customer Name</label>
               <input type="text" name="customerName" class="form-control" id="customer" placeholder="customer name">
            </div>

            <div class="mb-3">
                <label for="streetAddress" class="form-label">Street Address</label>
               <input type="text" name="address" class="form-control" id="streetAddress" placeholder="street Address">
            </div>

            <div class="mb-3">
                <label for="cityStateZip" class="form-label">City State Zip</label>
                <input type="text" name="citySateZip" class="form-control" id="cityStateZip" placeholder="City, State, Zip">
            </div>

            <div class="mb-3">
                <label for="cityStateZip" class="form-label">Monthly Charges</label>
               <input type="text" name="monthlyCharges" class="form-control" id="monthlyCharges" placeholder="">
            </div>
            <button class="btn btn-sm btn-success" type="button" onclick="generateUrl()">Generate URL</button>
        </form>
        <div id="generatedUrl"></div>
    </div>

    <script>
        function generateUrl() {
            const form = document.getElementById('form');
            const formData = new FormData(form);
            const params = new URLSearchParams(formData);
            const brandName=formData.get('brandName')||"";
            const customerName=formData.get('customerName')||"";
            const escName=formData.get('escName')||"";
            const address=formData.get('address')||"";
            const proposalDate=formData.get('proposalDate')||"";
            const citySateZip=formData.get('citySateZip')||"";
            const monthlyCharges=formData.get('monthlyCharges')||"";
            const url = `http://localhost/generatePdf/index?${params.toString()}`;
            document.getElementById('generatedUrl').innerHTML = `<p>Generated URL: <a href="${url}" target="_blank">${url}</a></p>`;
        }
    </script>
    
</body>
</html>