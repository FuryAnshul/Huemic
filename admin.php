<?php include 'header.php'; ?>

<div class="bg-secondary-subtle mb-3 p-0 mx-0">
    <!-- Shirt -->
    <div class="container">
        <div id="new-drops-section" class="row">

            <form class="row g-3 needs-validation border border-secondary">
                <h1>Only Shirt</h1>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Size</label>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;S&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;M&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;L&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XL&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XXL&nbsp;&nbsp;
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Price</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a price.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="formFile" class="form-label">Upload Shirt</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-12 m-3 p-3">
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </form>
        </div>

        <!-- T-Shirt -->
        <div id="new-drops-section" class="row">
            <form class="row g-3 needs-validation border border-secondary" novalidate>
                <h1>Only T-Shirt</h1>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Size</label>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;S&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;M&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;L&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XL&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XXL&nbsp;&nbsp;
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Price</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a price.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="formFile" class="form-label">Upload T-Shirt</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-12 m-3 p-3">
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </form>
        </div>

        <!-- Jeans -->
        <div id="new-drops-section" class="row">
            <form class="row g-3 needs-validation border border-secondary" novalidate>
                <h1>Only Jeans</h1>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Size</label>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;S&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;M&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;L&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XL&nbsp;&nbsp;
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel">&nbsp;&nbsp;XXL&nbsp;&nbsp;
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Price</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a price.
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="formFile" class="form-label">Upload Jeans</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="col-12 m-3 p-3">
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>