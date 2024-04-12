<div class="mt-5 sudokus">
    <div class="row">
        <div id="alert-banner"></div>

        <div class="col-10 sudoku-container" style="margin-right: -40px !important;">
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

    let activeId = 1;
    const sudokuContainer = document.getElementById("sudoku");
    sudokuContainer.innerHTML = "<ul>" + Array.from({length: 81}, (_, i) => 
        `<li id="${i + 1}" onclick="activeerCel(${i + 1})"><span></span></li>`).join('') + "</ul>";

    function plaatsCijfer(cijfer) {
        const activeCell = document.getElementById(activeId);
        if (activeCell) activeCell.innerText = cijfer;
    }

    function activeerCel(id) {
        const previousActiveCell = document.getElementById(activeId);
        if (previousActiveCell) previousActiveCell.classList.remove("bg-primary-subtle");
        activeId = id;
        const newActiveCell = document.getElementById(id);
        if (newActiveCell) newActiveCell.classList.add("bg-primary-subtle");
    }

    function generateSudoku() {
        const randomIndex = Math.floor(Math.random() * sudokus.length);
        const selectedSudoku = sudokus[randomIndex];

        selectedSudoku.forEach((cellValue, index) => {
            const cellElement = document.getElementById(index + 1);
            if (cellElement) {
                cellElement.classList.remove("inactive-cel");
                cellElement.innerText = cellValue !== 0 ? cellValue : '';
                if (cellValue !== 0) {
                    cellElement.classList.add("inactive-cel");
                    cellElement.onclick = null;
                }
            }
        });
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
        border: 1px solid #D2D2D2;
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

    .inactive-cel {
        background-color: #eeeee9;
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