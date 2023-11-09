<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Abbreviations</h1>
                <p>The abbr element is used to mark up an abbreviation or acronym:</p>
                <p>The <abbr title="Institut Teknologi Sepuluh Nopember">ITS</abbr> was founded in 1957.</p>
            </div>
            <div class="col-6">
                <h1>Blockquotes</h1>
                <p>The blockquote element is used to present content from another source:</p>
                <blockquote class="blockquote">
                    <p>ITS Reach for the Top echoed once again at the Pagelaran Mahasiswa Nasional Bidang TIK (GEMASTIK
                        2023) at Brawijaya University. ITS managed to win a total of 5 championship medals and brought
                        home the "Samakbya Padhesa Widya" trophy as the overall champion title for 3 times in a row.
                        VIVAT!</p>
                    <footer class="blockquote-footer">From ITS's website</footer>
                </blockquote>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <h1>Code Snippets</h1>
                <p>Inline snippets of code should be embedded in the code element:</p>
                <p>Kode untuk menampilkan "Hello" adalah <code>&lt;p&gt;Hello&lt;/p&gt;</code>.</p>
                <p> bagian warna pink ditulis fitur code</p>
            </div>
            <div class="col-6">
                <h1>Description Lists</h1>
                <p>The dl element indicates a description list:</p>
                <dl>
                    <dt>2014</dt>
                    <dd>- ITS #813 based on QS WUR </dd>
                    <dt>2015</dt>
                    <dd>- ITS #856 based on QS WUR</dd>
                </dl>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <div class="row">
                    <div class="col-6 border">
                        <h1>contoh penggunaan .h1</h1>
                    </div>
                    <div class="col-6 border">
                        <h2>contoh penggunaan .h2</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 border">
                        <h3>contoh penggunaan .h3</h3>
                    </div>
                    <div class="col-6 border">
                        <h4>contoh penggunaan .h4</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 border">
                        <h5>contoh penggunaan .h5</h5>
                    </div>
                    <div class="col-6 border">
                        <h6>contoh penggunaan .h6</h6>
                    </div>
                </div>
                <p><code>&lt;h&gt;</code> yang ada di bootstrap lebih bold dan besar dibanding yang disediakan html</p>
            </div>
            <div class="col-6">
                <h1>Highlight Text</h1>
                <p>Highlight untuk menandai seperti yang ada di <mark>word</mark>, <mark>google docs</mark> dan
                    <mark>lainnya</mark>
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <h1>Keyboard Inputs</h1>
                <p>To indicate input that is typically entered via the keyboard, use the kbd element:</p>
                <p>Press <kbd>play</kbd> to continue the game.</p>
            </div>
            <div class="col-6">
                <div class="container">
                    <h1>Multiple Code Lines</h1>
                    <p>For multiple lines of code, use the pre element:</p>
                    <pre>
            Pre bisa menampilkan
            tulisan
            sesuai dengan codingan dan     spasi
            di
            text
            editor
            </pre>
                </div>
            </div>
        </div>

</body>

</html>
