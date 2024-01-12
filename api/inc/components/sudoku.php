<div class="mt-5">
    <div class="row">
        <div id="alert-banner"></div>

        <div class="col-10 sudoku-container">
            <main class="sudoku-container-left" id="sudoku"></main>
        </d1iv>

        <div class="col-2">
            <a class="btn btn-success d-grid" onclick="checkSomSom()">Check SomSom</a>
        </div>

    </div>
</div>

<script>
    let sudoku_string = "<ul>";

    for (let i = 1; i <= 81; i++) {
        sudoku_string += `<li><input type="number" class="form-control text-center" value="${i}"</li>`;
    }
    document.getElementById("sudoku").innerHTML = sudoku_string;
</script>

<style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    input[type=number] {
        -moz-appearance: textfield
    }

    input {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }

    .sudoku-container-left {
        float: left;
    }

    .sudoku-container li:nth-child(n):nth-child(-n+9) {
        border-top-width: 4px;
    }

    .sudoku-container li:nth-child(n+73):nth-child(-n+81) {
        border-bottom-width: 4px;
    }

    .sudoku-container li:nth-child(3n) {
        border-right-width: 4px;
    }

    .sudoku-container li:nth-child(9n+1) {
        border-left-width: 4px;
    }

    .sudoku-container li:nth-child(n+19):nth-child(-n+27) {
        border-bottom-width: 4px;
    }

    .sudoku-container li:nth-child(n+46):nth-child(-n+54) {
        border-bottom-width: 4px;
    }

    .sudoku-container ul {
        display: grid;
        grid-template-columns: repeat(9, minmax(0, 1fr));
        grid-template-rows: repeat(9, minmax(0, 1fr));
        justify-content: center;
        align-content: center;
        grid-gap: 0rem;
        list-style: none;
        margin: 0 0 2vw;
        padding: 0;
        font-size: calc(2vw + 10px);
        max-width: 600px;
    }

    .sudoku-container li {
        margin: 0;
        padding: 0;
        text-align: center;
        border: 1px solid #dee2e6;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-control {
        font-size: 30px !important;
    }

    @media (max-width: 768px) {
        .sudoku-container .form-control {
            font-size: 8px !important;
        }
    }
</style>