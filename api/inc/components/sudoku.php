<div class="mt-5 sudokus">
    <div class="row">
        <div id="alert-banner"></div>

        <div class="col-10 sudoku-container">
            <main class="sudoku-container-left" id="sudoku"></main>
        </div>

        <div class="col-2">
            <table class="table mt-5">
                <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(1)">1</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(2)">2</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(3)">3</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(4)">4</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(5)">5</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(6)">6</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(7)">7</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(8)">8</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="plaatsCijfer(9)">9</button></td>
                </tr>
            </table>
            <a class="btn btn-success d-grid" onclick="generateSudoku()">Generate Sudoku</a>
        </div>

    </div>
</div>

<script>
    const sudokus = [
        [2, 5, 0, 7, 0, 0, 0, 1, 6, 0, 6, 0, 0, 0, 0, 4, 2, 8, 0, 0, 0, 1, 0, 0, 5, 0, 0, 5, 7, 0, 2, 1, 8, 9, 0, 0, 0, 0, 0, 3, 0, 9, 7, 8, 0, 9, 0, 3, 0, 0, 5, 1, 0, 0, 0, 0, 0, 8, 3, 0, 0, 7, 0, 4, 0, 2, 0, 0, 7, 0, 0, 0, 0, 0, 7, 0, 5, 0, 0, 3, 0],
        [0, 0, 9, 0, 0, 0, 0, 0, 8, 6, 0, 7, 4, 1, 0, 0, 5, 0, 0, 0, 2, 0, 5, 0, 0, 0, 7, 0, 9, 0, 1, 0, 7, 6, 0, 0, 0, 4, 0, 0, 9, 6, 3, 0, 0, 8, 6, 3, 0, 0, 4, 7, 0, 9, 5, 3, 6, 0, 0, 0, 0, 7, 0, 0, 0, 0, 7, 8, 0, 0, 3, 0, 0, 7, 0, 0, 0, 0, 0, 9, 2],
        [0, 0, 0, 0, 5, 0, 1, 0, 0, 7, 0, 0, 1, 0, 0, 6, 0, 0, 2, 3, 1, 0, 8, 0, 0, 0, 0, 3, 1, 0, 0, 0, 6, 8, 0, 0, 0, 0, 7, 0, 0, 0, 0, 9, 5, 0, 4, 0, 0, 3, 7, 0, 0, 0, 0, 2, 5, 3, 0, 0, 0, 8, 7, 0, 0, 6, 9, 0, 0, 0, 3, 2, 4, 0, 3, 2, 0, 0, 0, 1, 0],
        [6, 0, 0, 5, 1, 8, 0, 0, 0, 4, 2, 1, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 3, 0, 6, 9, 1, 0, 0, 0, 1, 0, 2, 7, 5, 8, 5, 1, 6, 0, 0, 0, 2, 0, 0, 0, 0, 0, 9, 5, 3, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1, 7, 3, 9, 8, 7, 0, 1, 0, 0, 6, 0, 5, 0, 8, 4, 6, 0, 2, 0],
        [4, 0, 3, 0, 5, 2, 6, 0, 0, 0, 0, 2, 0, 8, 6, 3, 0, 0, 0, 0, 0, 0, 1, 3, 4, 2, 7, 1, 6, 0, 0, 0, 4, 0, 9, 0, 0, 3, 0, 0, 0, 5, 0, 4, 0, 0, 7, 0, 0, 9, 0, 5, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 6, 3, 0, 0, 8, 2, 7, 0, 0, 1, 5, 8, 0, 3, 0, 0, 0, 0, 0],
        [0, 0, 2, 0, 0, 0, 4, 3, 8, 4, 3, 9, 0, 0, 5, 0, 0, 2, 8, 0, 0, 2, 0, 3, 0, 0, 5, 6, 0, 0, 9, 5, 0, 0, 0, 0, 5, 9, 4, 0, 0, 0, 8, 2, 0, 7, 0, 0, 0, 6, 4, 0, 9, 0, 0, 0, 0, 0, 0, 8, 1, 6, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 2, 8, 0, 4, 0, 9, 3, 0, 0],
        [0, 0, 0, 7, 3, 0, 0, 0, 9, 2, 8, 9, 0, 0, 0, 7, 0, 0, 7, 0, 0, 0, 8, 0, 2, 6, 0, 8, 0, 0, 0, 0, 5, 6, 0, 4, 6, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 9, 0, 0, 5, 0, 0, 8, 0, 5, 0, 3, 2, 6, 5, 0, 0, 2, 4, 0, 9, 0, 0, 3, 1, 0, 6, 0, 0, 0, 0, 7]
    ]

    let activeId = 1
    let sudoku_string = "<ul>";
    for (i = 1; i <= 81; i++) {
        sudoku_string += `<li id="${i}" onclick="activeerCel(${i})"><span></span></li>`;
    }
    sudoku_string += "</ul>"
    document.getElementById("sudoku").innerHTML = sudoku_string;

    function plaatsCijfer(cijfer) {
        document.getElementById(activeId).innerText = cijfer;
    }

    function activeerCel(id) {
        document.getElementById(activeId).classList.remove("bg-primary-subtle");
        activeId = id;
        document.getElementById(id).classList.add("bg-primary-subtle");
    }

    function generateSudoku() {
        let random_nmbr = Math.floor(Math.random() * 7);
        let selected_sudoku = sudokus[random_nmbr];
        for (index = 0; index <= 80; index++) {
            let cellValue = selected_sudoku[index];
            if (cellValue !== 0) {
                document.getElementById(index + 1).innerText = cellValue;
            } else {
                document.getElementById(index + 1).innerText = '';
            }
        }
    }

</script>

<style>
    .sudokus li:nth-child(n):nth-child(-n+9) {
        border-top-width: 4px;
    }

    .sudokus li:nth-child(n+73):nth-child(-n+81) {
        border-bottom-width: 4px;
    }

    .sudokus li:nth-child(3n) {
        border-right-width: 4px;
    }

    .sudokus li:nth-child(9n+1) {
        border-left-width: 4px;
    }

    .sudokus li:nth-child(n+19):nth-child(-n+27) {
        border-bottom-width: 4px;
    }

    .sudokus li:nth-child(n+46):nth-child(-n+54) {
        border-bottom-width: 4px;
    }

    .sudokus ul {
        display: grid;
        grid-template-columns: repeat(9, 5vw);
        grid-template-rows: repeat(9, 5vw);
        align-content: center;
        grid-gap: 0rem;
        list-style: none;
        margin: 0 0 2vw;
        padding: 0;
        font-size: calc(2vw + 10px);
    }

    .sudokus li {
        margin: 0;
        padding: 0;
        text-align: center;
        border: 1px solid black;
        display: flex;
        align-items: center;
        justify-content: center;

        span {
            margin-top: 0.4rem;
        }
    }

    .sudokus .note {
        background: #ddd;
        font-family: monospace;
        padding: 2em 5em;
        font-size: 120%;
        order: -1;
    }

    @supports (display:grid) {
        .note {
            display: none;
        }
    }

    .sudokus .form-control {
        font-size: 48px;
    }
</style>