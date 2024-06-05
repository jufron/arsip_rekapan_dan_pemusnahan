
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
        </style>
        <script src="https://mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.3.136/pdf_viewer.min.css" integrity="sha512-Cq5XgEsaLgxVXOIAn0dHWEksHM6X9POVKcaD1dGc37C6O+vWl5UIxtgC05JW9WnZA7jll4ouJ3zXDJ6/7RDX7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="module">
            // If absolute URL from the remote server is provided, configure the CORS
            // header on that server.
            const url = 'https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/examples/learning/helloworld.pdf';

            // Loaded via <script> tag, create shortcut to access PDF.js exports.
            const { pdfjsLib } = globalThis;

            // The workerSrc property shall be specified.
            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.mjs';

            // Asynchronous download of PDF
            const loadingTask = pdfjsLib.getDocument(url);
            loadingTask.promise.then(function(pdf) {
                console.log('PDF loaded');

                // Fetch the first page
                var pageNumber = 1;
                pdf.getPage(pageNumber).then(function(page) {
                console.log('Page loaded');

                var scale = 1.5;
                var viewport = page.getViewport({scale: scale});

                // Prepare canvas using PDF page dimensions
                var canvas = document.getElementById('the-canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);
                renderTask.promise.then(function () {
                    console.log('Page rendered');
                });
                });
            }, function (reason) {
                // PDF loading error
                console.error(reason);
            });
        </script>

    </head>
    <body>

        <canvas id="pdf"></canvas>
    </body>
</html>
