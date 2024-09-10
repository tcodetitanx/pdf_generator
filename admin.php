
<?php include 'header.php';?>
    <div class="container border rounded p-4">
        <h2 class="heading mb-3">Axiom Corp Generate Promissory Note URL</h2>
        <form id="form">
           <div class="mb-3">
                <label for="brand" class="form-label">Brand Name</label>
               <input type="text" name="brandName" class="form-control" id="brand" placeholder="brand name">
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
                <label for="monthlyCharge" class="form-label"> Monthly Service Charge </label>
               <input type="text" name="monthlyCharge" class="form-control" id="monthlyCharge" placeholder="Monthly Service Charge">
            </div>

           <div class="mb-3">
                <label for="monthlyCharge" class="form-label d-block">  Service Days </label>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="monday">
                    <label class="form-check-label" for="monday">  Monday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="Tuesday" checked>
                    <label class="form-check-label" for="Tuesday">  Tuesday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="wednesday">
                    <label class="form-check-label" for="wednesday">  Wednesday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="thursday" checked>
                    <label class="form-check-label" for="thursday">  Thursday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="friday">
                    <label class="form-check-label" for="friday">  Friday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="saturday" checked>
                    <label class="form-check-label" for="saturday">  Satarday </label>
                </div>
                <div class="form-check d-inline-block ms-3">
                    <input class="form-check-input" type="checkbox" value="" id="sunday">
                    <label class="form-check-label" for="sunday">  Sunday </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <table class="table table-bordered rounded mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Additoinal Services </th>
                            <th scope="col">Charge </th>
                            <th scope="col">Area </th>
                            <th scope="col">Square Footage </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                        </tr>
                        <tr>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                        </tr>
                        <tr>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                        </tr>
                        <tr>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                            <td class="p-0 m-0"><input class="tableInput w-100 h-100" type="text" name="service"></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-end">
                                <button class="btn btn-sm btn-success" type="button" onclick="addRow()"> Add Row </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <div class="mb-3">
                <label for="servicesAcceptedBy" class="form-label"> Additional Services Accepted By </label>
               <input type="text" name="servicesAcceptedBy" class="form-control" id="servicesAcceptedBy" placeholder="Additional Services Accepted By ">
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
            const amountDue = parseFloat(formData.get('amount_due')) || 0;
            const lateFees = parseFloat(formData.get('late_fees')) || 0;
            const miscFees = parseFloat(formData.get('misc_fees')) || 0;
            const total = amountDue + lateFees + miscFees;
            params.append('total', total.toFixed(2));
            const url = `https://goaxiomrealty.com/tools/promnote/?${params.toString()}`;
            document.getElementById('generatedUrl').innerHTML = `<p>Generated URL: <a href="${url}" target="_blank">${url}</a></p>`;
        }
    </script>
</body>
</html>