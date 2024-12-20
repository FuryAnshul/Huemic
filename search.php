<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - HUEMIC</title>

    <link rel="shortcut icon" href="pic/logo1.png">

    <link rel="stylesheet" href="search.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- <div class="container-fluid">
        <div class="search_bar">
            <div class="row">
                <i class="bi bi-search"></i>
                <a class="btn-close" aria-label="Close" href="Huemic.html"></a>
                <div class="input-group">
                    <input type="text" class="border-secondary" placeholder="search">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <h5>Popular searches</h5>
                <ul role="listbox" class="boost-sd__suggestion-queries-list list-unstyled">
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : t shirt" aria-selected="false" role="option" data-title="t shirt"
                        data-extra-param="false"><a tabindex="-1" href="/search?q=t+shirt"
                            class="boost-sd__suggestion-queries-link">t shirt</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : half shirt" aria-selected="false" role="option"
                        data-title="half shirt" data-extra-param="false"><a tabindex="-1" href="/search?q=half+shirt"
                            class="boost-sd__suggestion-queries-link">half shirt</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : black shirt" aria-selected="false" role="option"
                        data-title="black shirt" data-extra-param="false"><a tabindex="-1" href="/search?q=black+shirt"
                            class="boost-sd__suggestion-queries-link">black shirt</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : linen" aria-selected="false" role="option" data-title="linen"
                        data-extra-param="false"><a tabindex="-1" href="/search?q=linen"
                            class="boost-sd__suggestion-queries-link">linen</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : white shirt" aria-selected="false" role="option"
                        data-title="white shirt" data-extra-param="false"><a tabindex="-1" href="/search?q=white+shirt"
                            class="boost-sd__suggestion-queries-link">white shirt</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : cargo" aria-selected="false" role="option" data-title="cargo"
                        data-extra-param="false"><a tabindex="-1" href="https://www.snitch.co.in/collections/cargo"
                            class="boost-sd__suggestion-queries-link">cargo</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : shirt" aria-selected="false" role="option" data-title="shirt"
                        data-extra-param="false"><a tabindex="-1" href="https://www.snitch.co.in/collections/shirts"
                            class="boost-sd__suggestion-queries-link">shirt</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : kurta" aria-selected="false" role="option" data-title="kurta"
                        data-extra-param="false"><a tabindex="-1" href="/search?q=kurta"
                            class="boost-sd__suggestion-queries-link">kurta</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : jeans" aria-selected="false" role="option" data-title="jeans"
                        data-extra-param="false"><a tabindex="-1" href="https://www.snitch.co.in/collections/jeans"
                            class="boost-sd__suggestion-queries-link">jeans</a></li>
                    <li class="boost-sd__suggestion-queries-item boost-sd__suggestion-queries-item--popular"
                        aria-label="suggestions : shirts" aria-selected="false" role="option" data-title="shirts"
                        data-extra-param="false"><a tabindex="-1" href="https://www.snitch.co.in/collections/shirts"
                            class="boost-sd__suggestion-queries-link">shirts</a></li>
                </ul>
            </div>

            <div class="col-md-8">
                <h5>Trending Now</h5>
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    
                    <div class="col-md-4">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="search-container">
        <div class="row p-0 m-0">
            <div class="col-11 p-0 m-0">
                <div class="search-bar text-center">
                    <input type="text" placeholder="Search" id="search-input" />
                    <button class="close-btn" onclick="clearSearch()">&#x2715;</button>
                </div>
            </div>
                <a class="btn-close fs-5 m-3 p-0" aria-label="Close" href="Huemic.php"></a>
        </div>

        <div class="search-results">
            <div class="search-column">
                <h3 class="text-secondary text-uppercase"><small>Popular Searches</small></h3>
                <ul>
                    <li>T-shirt</li>
                    <li>Black shirt</li>
                    <li>White shirt</li>
                    <li>Linen</li>
                    <li>Half shirt</li>
                    <li>Kurta</li>
                    <li>Shirt</li>
                    <li>Jeans</li>
                    <li>Cargo</li>
                    <li>Shirts</li>
                </ul>
            </div>

            <div class="trending-column">
                <h3>Trending Now</h3>
            </div>
        </div>
    </div>


    <script>
        function clearSearch() {
            document.getElementById('search-input').value = '';
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>